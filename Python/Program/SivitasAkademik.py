# Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

# import class atau library Mahasiswa
from Mahasiswa import Mahasiswa

# Membuat kelas SivitasAkademik yang merupakan anak dari kelas Mahasiswa dan cucu dari kelas Human
# sehingga kelas SivitasAkademik dapat mengakses atribut dan method dari kelas Mahasiswa maupun kelas Human


class SivitasAkademik(Mahasiswa):
    # deklarasi atribut private
    __asal_univ = ""
    __email = ""

    # konstruktor
    def __init__(self, asal_univ="", email=""):
        self.__asal_univ = asal_univ
        self.__email = email

    # method setter dan getter
    def setUniv(self, asal_univ):
        self.__asal_univ = asal_univ

    def setEmail(self, email):
        self.__email = email

    def getUniv(self):
        return self.__asal_univ

    def getEmail(self):
        return self.__email
