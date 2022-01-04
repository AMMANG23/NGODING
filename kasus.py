
#Contoh kasus
harga_permeter = 300000
luas = int(input(" Luas tanah : "))
harga_luas_tanah = harga_permeter * luas
if harga_luas_tanah > 50000000 and harga_luas_tanah < 100000000:
        pajak = 3/100 * harga_luas_tanah
elif harga_luas_tanah > 100000000:
        pajak = 5/100 * harga_luas_tanah
else:
        pajak = 1/100 * harga_luas_tanah
total_harga = harga_luas_tanah - pajak
print("Totap harga bersih = ",total_harga)
