"""
#cd "D:\Semester III\belajar_python"

print ("hello world");
for i in range(1, 11):
    print(i)
#mencoba membuat varible
x = "Malikul"
y = "Mulki"
print (x, y)


                                    #Membuat projek tantangan 
Aturan:

Program menyimpan sebuah angka rahasia (contoh: angka_rahasia = 7).

User diminta memasukkan tebakannya (pakai input()).

Kalau tebakannya benar → tampilkan pesan “Selamat, benar!”.

Kalau salah → tampilkan “Salah, coba lagi”.

Program berhenti kalau user sudah menebak dengan benar.
"""
"""
print ("Temukan angka rahasia")
print ("Angka ini sering muncul dalam melambangkan kebaikan dan kesempurnaan, dan batas menjawabmu hanya 5x")
x = 666
Percobaan = 0
while True:
    try:
        Tebakan = int(input("Masukan Angkanya: "))
        Percobaan += 1
        if Tebakan == x:
            print ("selamat, anda benar!")
            break

        elif Tebakan < x:
            print ("Tebakan terlalu kecil")
        else:
            print ("Tebakan terlalu besar")
            
        if Percobaan == 5:
            print ("Percobaan anda mencapai batas")
            break
    except ValueError:
        print ("Input harus angka")
def
#Unpack a Collection
fruit = ["boh drien","boh jambee","boh limoe"]
a, b, c = fruit
print (a)
"""
"""
#global variable
a = "Mulki"
def myfucnt():
    a = "Malikul" #menggunakan global variable di dalam fungsi
    print("Nama saya adalah " +a)
myfucnt()
print ("Nama saya adalah "+a)#pemanggilan variable yang berada di diluar fungsi akan default dengan inisialisai pertama
"""
"""Tugas:

Pilih menu:
1. Tambah
2. Kurang
3. Kali
4. Bagi
5. Lihat history
0. Keluar
Pilihan: 1
Masukkan angka pertama: 5
Masukkan angka kedua: 3
Hasil: 8

"""

history=[]
def Tambah(a, b):
    hasil = a + b
    history.append(f"{a}+{b}={hasil}")
    print("Hasil Penjumlahan: ", hasil)
def Kurang(a, b):
    hasil = a - b
    history.append(f"{a}-{b}={hasil}")
    print("Hasil Pengurangan: ", hasil)
def Kali(a, b):
    hasil = a * b
    history.append(f"{a}*{b}={hasil}")
    print("Hasil Perekalian: ", hasil)
def Bagi(a, b):
    if b == 0:
        print("Error: Tidak bisa dibagi 0")
    else:
        hasil = a / b
        history.append(f"{a}/{b}={hasil}")
        print("Hasil Pembagian: ", hasil)
def Riwayat():
    if len(history)==0:
        print("Riwayat masih kosong!!")
    else:
        print ("---Riwayat---")
        for h in history:
            print(h)

while True:    
    pilihan = input("""
---Kalkulator---
1. Tambah
2. Kurang
3. Kali
4. Bagi
5. Riwayat
6. keluar
Pilih menu: """)

    if pilihan =="1":
        a = int(input("Masukan Angka pertama: "))
        b = int(input("Masukan Angka Kedua: "))
        Tambah(a, b)
    elif pilihan =="2":
        a = int(input("Masukan Angka Pertama: "))
        b = int(input("Masukan Angka Kedua: "))
        Kurang(a, b)
    elif pilihan =="3":
        a = int(input("Masukan Ngka Pertama: "))
        b = int(input("Masukan Angka Kedua: "))
        Kali(a, b)
    elif pilihan =="4":
        a = int(input("Masukan Ngka Pertama: "))
        b = int(input("Masukan Angka Kedua: "))
        Bagi(a, b)
    elif pilihan =="5":
        Riwayat()
    elif pilihan =="6":
        print("Terimakasih")
        break
    else:
        print("Pilihan Tidak Valid")
