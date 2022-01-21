
#Penggunaan import random
#Game Tebak angka yang keluar dari 1 - 10
import random
print("_______///Tebak Angka///_______")
tebak = int(input("Tebak angka berapa yang keluar dari 1-10 ? "))
angka = random.randint(1, 10)
if tebak == angka:
	print(f"Angka yang keluar {angka}\nTebakan Anda Benar")
else:
	print(f"Angka yang keluar {angka}\nTebakan Anda Salah")
