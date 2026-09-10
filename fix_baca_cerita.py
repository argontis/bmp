with open('resources/views/artikel.blade.php', 'r') as f:
    content = f.read()

content = content.replace('>Baca cerita<', '>Baca selengkapnya<')

with open('resources/views/artikel.blade.php', 'w') as f:
    f.write(content)
