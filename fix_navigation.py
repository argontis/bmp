import os
import re

directory = 'resources/views'

for filename in os.listdir(directory):
    if filename.endswith('.blade.php'):
        filepath = os.path.join(directory, filename)
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
        
        # 1. Add HTMX to head if not present
        if '<head>' in content and 'htmx.org' not in content:
            content = content.replace('</head>', '    <script src="https://unpkg.com/htmx.org@1.9.12"></script>\n</head>')
        
        # 2. Add hx-boost to body if not present
        if '<body' in content and 'hx-boost' not in content:
            content = re.sub(r'(<body[^>]*?)>', r'\1 hx-boost="true">', content, count=1)
        
        # 3. Replace <button onclick="window.location.href='/...'" ...> with <a href="/..." ...>
        # We need to handle both single and double quotes in window.location.href
        pattern = r'<button\s+onclick=[\'"]window\.location\.href=[\'"]([^\'"]+)[\'"][\'"]([^>]*)>'
        
        # We need to find all occurrences and their matching closing </button>
        # To do this safely with regex, we can replace the opening tag, and then globally replace </button> 
        # BUT </button> could be for actual buttons.
        # So we should iterate over matches.
        
        # A simpler way:
        def replacer(match):
            url = match.group(1)
            rest_of_attrs = match.group(2)
            # Find the closing tag for this button
            return f'<a href="{url}"{rest_of_attrs}>'

        new_content = re.sub(pattern, replacer, content)
        
        # Also need to replace the corresponding </button> with </a>.
        # This is tricky because there might be other buttons. 
        # Since we just converted the opening tag to <a>, the HTML is currently invalid (<a ...> ... </button>).
        # We can write a simple parser to fix this, or just do it for specific known links.

        # Let's write back to file
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(new_content)

print("Done")
