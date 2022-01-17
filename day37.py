
list_tiket = []
jumlah_tiket = int(input("Jumlah Tiket : "))
for i in range(jumlah_tiket):
	nama = input("Nama : ")
	jenis_tiket = input("Jenis Tiket : ")
	alamat = input("Alamat : ")
	list_tiket.append([nama, jenis_tiket, alamat])
print(list_tiket)
