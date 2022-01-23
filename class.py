
#Belajar membuat class
class rpl:
	def __init__(self, nama):
		self.nama = nama
	def halo(self):
		print(f"Nama saya {self.nama}, Apa kabar ?")
orang = rpl('Arman')
orang.halo()
