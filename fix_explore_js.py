import re

with open('resources/views/explore.blade.php', 'r') as f:
    content = f.read()

# We need to remove the b.querySelector('svg').classList lines
new_content = re.sub(r'b\.querySelector\(\'svg\'\)\.classList\.[^\n]+', '', content)

with open('resources/views/explore.blade.php', 'w') as f:
    f.write(new_content)
print("Explore JS svg bugs removed.")
