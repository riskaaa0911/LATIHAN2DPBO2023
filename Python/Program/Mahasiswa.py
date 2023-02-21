# Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

# import class atau library Human
from Human import Human

# Membuat kelas Mahasiswa yang merupakan anak dari kelas Human
# sehingga kelas Mahasiswa dapat mengakses atribut dan method dari kelas Human


class Mahasiswa(Human):
    # deklarasi atribut privat
    __nim = ""
    __fakultas = ""
    __prodi = ""

    # konstruktor
    def __Init__(self, nim="", fakultas="", prodi=""):
        self.__nim = nim
        self.__fakultas = fakultas
        self.__prodi = prodi

    # method setter dan getter
    def setNim(self, nim):
        self.__nim = nim

    def setFakultas(self, fakultas):
        self.__fakultas = fakultas

    def setProdi(self, prodi):
        self.__prodi = prodi

    def getNim(self):
        return self.__nim

    def getFakultas(self):
        return self.__fakultas

    def getProdi(self):
        return self.__prodi
