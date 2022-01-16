
nama = input("Nama : ")
nim = input("Nim : ")
jumlah_matakuliah = int(input("Jumlah matakuliah : "))
nilai_MK = []
jumlah_sks = []
for i in range(0,jumlah_matakuliah):
	matakuliah = input("Nama Matakuliah : ")
	sks = int(input("Jumlah SKS : "))
	jumlah_sks.append(sks)
	nilai = int(input("Nilai Matakuliah : "))
	if nilai >= 80 and nilai <= 100:
		nilai_MK.append(4*sks)
	elif nilai >= 65 and nilai < 80:
		nilai_MK.append(3*sks)
	elif nilai >= 55 and nilai < 65:
		nilai_MK.append(2*sks)
	elif nilai < 55:
		nilai_MK.append(0*sks)
ipk = sum(nilai_MK) / sum(jumlah_sks)
if ipk >= 3.5 and ipk <= 4:
		print("ipk = ",ipk,"\nPREDIKAT DENGAN PUJIAN")
elif ipk >= 3 and ipk < 3.5:
	print("ipk = ",ipk,"\nPREDIKAT SANGAT MEMUASKAN")
elif ipk >= 2.5 and ipk < 3:
		print("ipk = ",ipk,"\nPREDIKAT MEMUASKAN")
elif ipk < 2.5:
		print("ipk = ",ipk,"\nPREDIKAT LULUS")
