const menu = [
  {
    nama: "Nasi Kucing",
    gambar:
      "https://images.unsplash.com/photo-1516684732162-798a0062be99?w=600",
    deskripsi: "Nasi khas angkringan dengan lauk sederhana.",
    harga: "Rp 12.000",
    wa: "6285748159338",
  },
  {
    nama: "Sate Usus",
    gambar: "https://images.unsplash.com/photo-1555939594-58d7cb561ad1?w=600",
    deskripsi: "Sate usus gurih dan lezat.",
    harga: "Rp 1.000",
    wa: "6285748159338",
  },
  {
    nama: "Sate Telur Puyuh",
    gambar:
      "https://images.unsplash.com/photo-1529042410759-befb1204b468?w=600",
    deskripsi: "Sate telur puyuh favorit pelanggan.",
    harga: "Rp 2.000",
    wa: "6285748159338",
  },
  {
    nama: "Es Teh",
    gambar:
      "https://images.unsplash.com/photo-1499636136210-6f4ee915583e?w=600",
    deskripsi: "Segar dan cocok menemani makan.",
    harga: "Rp 3.000",
    wa: "6285748159338",
  },
  {
    nama: "Kopi Hitam",
    gambar:
      "https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=600",
    deskripsi: "Kopi hangat khas angkringan.",
    harga: "Rp 5.000",
    wa: "6285748159338",
  },
];

const container = document.getElementById("menu-container");

menu.forEach((item) => {
  container.innerHTML += `
    <div class="card">
      <img src="${item.gambar}" alt="${item.nama}">
      <h3>${item.nama}</h3>
      <p>${item.deskripsi}</p>
      <div class="harga">${item.harga}</div>

      <a class="btn"
         href="https://wa.me/${item.wa}?text=Halo,%20saya%20ingin%20memesan%20${encodeURIComponent(item.nama)}"
         target="_blank">
         Pesan Sekarang
      </a>
    </div>
  `;
});

document.getElementById("tahun").textContent = new Date().getFullYear();
