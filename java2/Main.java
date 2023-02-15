/*
Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum dalam mata kuliah Desain dan Pemrograman Berorientasi Objek 
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.
*/

public class Main {
     public static void main(String[] args) {
        Human human1;
        Mahasiswa mhs1;
        SivitasAkademik mhs;

        human1 = new Human();
        
        human1.setNik("12345678");

        System.out.print("NIK: ");
        System.out.println(human1.getNik());

        mhs1 = new Mahasiswa();
        
        mhs1.setNim("2109103");
        mhs1.setNama("Riska");
        mhs1.setGender("Famale");
        mhs1.setFakultas("FPMIPA");
        mhs1.setProdi("Ilkom");
      
        System.out.print("NIM: ");
        System.out.println(mhs1.getNim());
        System.out.print("Nama: ");
        System.out.println(mhs1.getNama());
        System.out.print("Gender: ");
        System.out.println(mhs1.getGender());
        System.out.print("Fakultas: ");
        System.out.println(mhs1.getFakultas());
        System.out.print("Prodi: ");
        System.out.println(mhs1.getProdi());

        mhs = new SivitasAkademik();
        mhs.setUniv("UPI");
        mhs.setEmail("riskanurohmah@upi.edu");
        System.out.print("Asal Universitas: ");
        System.out.println(mhs.getUniv());
        System.out.print("Email: ");
        System.out.println(mhs.getEmail());

     }
}
