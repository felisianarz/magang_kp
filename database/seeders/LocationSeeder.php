<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = array(
            array(
                'location_name'     => 'PT Kalimas AI Mercedes-Benz Yogyakarta',
                'location_address'  => 'Jl. Raya Yogya - Solo Km. 9 Yogyakarta - 55010',
                'number_phone'      => '( 0274 ) 488130, 484213, 488916',
                'description'	    => 
                    ' Sebagai dealer resmi Mercedes-Benz (sales, service & spare part) dengan lokasi yang strategis. 
                    Didukung dengan tempatnya yang luas dan nyaman. 
                    Mercedes-Benz YogyaStafnya ramah kepada setiap customer dengan ruang tunggu yang nyaman. 
                    Melayani segala macam service dan perbaikan kendaraan Mercedes-Benz. Selain itu, juga melayani penjualan kendaraan dan suku cadang yang lengkap. 
                    Segala macam service ataupun kerusakan kendaraan Mercedes-Benz dikerjakan oleh tenaga yang profesional di bidangnya dengan standar Mercedes-Benz, penuh ketelitian dan kecermatan sehingga kendaraan Mercedes-Benz anda selesai dengan hasil yang sempurna dan memuaskan. 
                    Lokasi workshopnya juga cukup luas.'
            ),
            array(
                'location_name'     => 'PT Kalimas AI Mercedes-Benz Semarang',
                'location_address'  => 'Jl. Raya Semarang - Demak Km. 7, Semarang',
                'number_phone'      => '+62246592811 , +62246592812',
                'description'	    => 
                    ' Kami siap membantu menyelesaikan segala permasalahan dan kerusakan kendaraan Mercedes-Benz (Mercy) yang anda alami. Maintenance/service dan repair kendaraan Mercedes-Benz anda dapat pula kami layani dengan layanan antar dan jemput kendaraan yang merupakan salah satu bentuk layanan VVIP customer service kami. Di bengkel kami tersedia Spare Part/Suku cadang Original (Genuine parts) Mercedes-Benz.Mercedes-Benz Semarang
                    Workshop kami ditangani oleh mekanik profesional yang terlatih sesuai dengan standard Mercedes-Benz yang selalu mengikuti kemajuan pengetahuan tehnologi.  Workshop yang luas  menjamin Mercedes-Benz anda terhindar dari gesekan-gesekan yang melukai cat dan body kendaraan anda. Luas area kami adalah 15.000 m2.
                    Suku cadang Orisinil (Genuine parts) tersedia lengkap lebih dari 25.000 item dapat dipastikan terjamin kualitas & mutunya kami tawarkan dengan harga yang murah & bersaing. Ketersedian suku cadang yang lengkap akan mempercepat kinerja mekanik, sedangkan suku cadang orisinil akan menjamin keamanan customer dalam berkendaraan.
                    Wolf Sprayboot (oven) made in Germany,  menjamin kualitas dan mutu pengecatan yang sempurna. Metode dan peralatan kami menjamin ketahanan wet-look yang superior dan menghasilkan cat yang mengkilap begitu keluar dari oven tanpa perlu pemolesan lagi.
                    Dengan Cellete Bench  yang kami miliki memungkinkan chasis Mercedes-Benz yang rusak karena tabrakan, dapat dikembalikan seperti semula/sediakala (seperti waktu keluar dari pabrik). Pengendalian kendaraan akan sama seperti pada saat kendaraan tersebut masih baru, hal ini sangat penting dalam menjamin keselamatan pengendara.
                    Mercedes-Benz Service Car kami selalu siap mendatangi lokasi kendaraan anda yang sedang mengalami kerusakan. Kecepatan pelayanan  menjadi moto kami dalam melayani customer Mercedes-Benz.'
            ),
            array(
                'location_name'     => 'PT Kalimas BI Mercedes-Benz Bali',
                'location_address'  => 'Jl. By - Pass Ngurah Rai No.101 Denpasar',
                'number_phone'      => '( 0361 ) 288115, 288668, 289025, 289030.',
                'description'	    => 
                        'Stafnya ramah dalam melakukan pelayanan terhadap customer. Segala service ataupun kerusakan kendaraan Mercedes-Benz anda dapat dikerjakan disini.
                        Stock suku cadang orisinil (Genuine part) yang lengkap sehingga kendaraan yang berkunjung akan mendapatkan pelayanan secepat mungkin. Suku cadang yang berkualitas menjaga kondisi kendaraan Mercedes-Benz anda.
                        Semua pekerjaan di workshop dikerjakan oleh tenaga ahli di bidangnya, sehingga menjamin service ataupun perbaikan kendaraan selesai dengan baik dan tepat waktu.  Lokasi workshopnya pun cukup luas.'
            ),
            array(
                'location_name'     => 'PT Kalimas SI Mercedes-Benz Solo',
                'location_address'  => 'Jl. Raya Solo Permai Solo Baru - Sukoharjo HH / 09 - 57552 , Jawa Tengah.',
                'number_phone'      => '( 0271 ) 621354, 621356',
                'description'	    => 
                        'Selalu siap memberikan pelayanan terbaik dengan lebih mengutamakan kepuasan customer. Service rutin ataupun keluhan terhadap segala kerusakan kendaraan Mercedes-Benz anda  bisa teratasi disini.
                        Dengan didukung staf yang ramah dan profesional, suku cadang yang lengkap dan berkualitas, serta ruang lingkup workshop yang luas dan nyaman akan menjamin mobil kesayangan Mercedes-Benz anda tampil lebh sempurna.'
            ),
        );
        foreach ($locations as $location) {
            Location::create([
                "location_name" => $location['location_name'],
                "location_address" => $location['location_address'],
                "number_phone" => $location['number_phone'],
                "description" => $location['description']
            ]);
        }
    }
}
