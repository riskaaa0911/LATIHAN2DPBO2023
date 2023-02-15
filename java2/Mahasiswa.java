/*
Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum dalam mata kuliah Desain dan Pemrograman Berorientasi Objek 
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.
*/

class Mahasiswa extends Human{
    private String nim;
    private String fakultas;
    private String prodi;
    Mahasiswa() {
        
    }

    public void setNim(String nim) {
        this.nim = nim;
    }

    public void setFakultas(String fakultas) {
        this.fakultas = fakultas;
    }

    public void setProdi(String prodi) {
        this.prodi = prodi;
    }
    

    public String getNim() {
        return this.nim;
    }

    public String getFakultas() {
        return this.fakultas;
    }

    public String getProdi() {
        return this.prodi;
    }

}