gaji_golongan = int(input("Gaji pokok Golongan 1/2/3 ? "))
tahun_kerja = int(input("Tahun masuk kerja ? "))
masa_kerja = 2011 - tahun_kerja
if masa_kerja >= 7:
    bonus = 150_000
    if gaji_golongan == 1:
        gaji = 1_500_000
    elif gaji_golongan == 2:
        gaji = 1_200_000
    elif gaji_golongan == 3:
        gaji = 1_000_000
elif masa_kerja < 7:
    bonus = 0
    if gaji_golongan == 1:
        gaji = 1_500_000
    elif gaji_golongan == 2:
        gaji = 1_200_000
    elif gaji_golongan == 3:
        gaji = 1_000_000

print("Gaji total : ",gaji + bonus)



