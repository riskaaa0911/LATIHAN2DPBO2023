# Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

#import kelas
from Human import Human
from Mahasiswa import Mahasiswa
from SivitasAkademik import SivitasAkademik

# deklarasi list
list = []
# instansiasi objek SivitasAkademik
mhs = SivitasAkademik()
# set atribut
mhs.setNik("12345678")
mhs.setNim("2109103")
mhs.setNama("Riska")
mhs.setGender("Famale")
mhs.setFakultas("FPMIPA")
mhs.setProdi("Ilkom")
mhs.setUniv("UPI")
mhs.setEmail("riskanurohmah@upi.edu")
# memasukan data ke list
list.append(mhs)

# deklar dan inisialisasi variabel
i = 0
n = 0
nomor = 0
nik = ''
nim = ''
nama = ''
gender = ''
fakultas = ''
prodi = ''
univ = ''
email = ''

# Menu
print("*----------------------------*")
print("*            MENU            *")
print("*----------------------------*")
print("* 1. Lihat  Data Mahasiswa   *")
print("* 2. Tambah Data Mahasiswa   *")
print("* 3. Keluar                  *")
print("*----------------------------*")

# perulangan untuk memilih menu, perulangan selesai jika memilih menu 3
while nomor != 3:
    # masukan pilihan menu
    nomor = int(input("\nPilih menu: "))
    # jika menu 1 maka menampilkan data list nya
    if nomor == 1:
        print("\n===Daftar Mahasiswa UPI Angkatan 2021===")
        for i in range(len(list)):
            print(str(i+1) + ".NIK         : " + list[i].getNik())
            print("  NIM         : " + list[i].getNim())
            print("  Nama        : " + list[i].getNama())
            print("  Gender      : " + list[i].getGender())
            print("  Fakultas    : " + list[i].getFakultas())
            print("  Prodi       : " + list[i].getProdi())
            print("  Universitas : " + list[i].getUniv())
            print("  email       : " + list[i].getEmail())
    # jika menu 2 maka harus menginputkan data sebanyak n atau jml data yang ingin ditambahkan
    elif nomor == 2:
        # masukan jml data yang akan ditambahkan
        n = int(input("\nJumlah data yang akan ditambahkan: "))
        # perulangan untuk menambahkan data sebanyak n
        for i in range(n):
            print("Masukkan data Mahasiswa ke-" +
                  str(i+1) + " yang akan ditambahkan:")
            # menambahkan data
            nik = input("NIK: ")
            nim = input("NIM: ")
            nama = input("Nama: ")
            gender = input("Gender: ")
            fakultas = input("Fakultas: ")
            prodi = input("Prodi: ")
            univ = input("Universitas: ")
            email = input("Email: ")
            # instansiasi objek SivitasAkademik
            temp = SivitasAkademik()
            # set atribut berdasarkan inputan
            temp.setNik(nik)
            temp.setNim(nim)
            temp.setNama(nama)
            temp.setGender(gender)
            temp.setFakultas(fakultas)
            temp.setProdi(prodi)
            temp.setUniv(univ)
            temp.setEmail(email)
            list.append(temp)
        print("\nData Berhasil ditambahkan!")

print("\nTerima Kasih:)")
