-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql102.byetcluster.com
-- Waktu pembuatan: 26 Bulan Mei 2025 pada 16.25
-- Versi server: 10.6.19-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_38739425_Airdrop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `list`
--

CREATE TABLE `list` (
  `hash` int(11) NOT NULL,
  `id` varchar(200) NOT NULL,
  `token` varchar(300) NOT NULL,
  `airdrop` varchar(300) NOT NULL,
  `funding` varchar(300) NOT NULL,
  `type` varchar(300) NOT NULL,
  `roadmap` varchar(300) NOT NULL,
  `running` varchar(300) NOT NULL,
  `task` varchar(300) NOT NULL,
  `linkreff` varchar(300) NOT NULL,
  `note` varchar(5000) NOT NULL,
  `tutorial` mediumtext NOT NULL,
  `source` varchar(300) NOT NULL,
  `realtime` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data untuk tabel `list`
--

INSERT INTO `list` (`hash`, `id`, `token`, `airdrop`, `funding`, `type`, `roadmap`, `running`, `task`, `linkreff`, `note`, `tutorial`, `source`, `realtime`) VALUES
(12, '1', '0xSlo7nFQ3qsvxGI41iWMVLuNTE2H0JBcbKZReaAkjXpzD9tfdOh', 'Kite ai', 'TBD', 'testnet', 'ozone is live', 'chrome/wallet', 'claim xp', 'https://testnet.gokite.ai?referralCode=D1W0TNF5', 'Kite AI\'s Incentivized Testnet v1 Aero is LIVE!\r\nLayer-1 blockchain on Avalanche. Kite AI: The Purpose-Built EVM-Compatible Layer 1 Unlocking Fair Access to AI Assets Data, Powered by Proof of AI\r\nInvestor : haskey capital', 'â€¢klik link diatas lalu ikuti step dibawah ini \r\n\r\n- connect Metamask \r\n- connect Twitter & Discord \r\n- selesaikan Quest yang Sedang Berlangsung \r\n- klik task obrolan dengan AI (Harian) untuk mendapatkan dapatkan XP \r\n\r\nâ€¢jelajahi Kite AI di Galxe: https://app.galxe.com/quest/avax/GCj5jtpMyh \r\n\r\nâ€¢sumber:\r\nhttps://x.com/avax/status/1887519366909927431?s=46', 'AFA', '23-05-2025'),
(13, '2', '0x92pn1ZHq80Kt56DJQofcImjlvXTbeVxBdSOsuU3hLFWCw7ArEa', 'Grass', '$4.5M', 'depin', 'stage 2', 'extension', 'Earning', 'https://app.getgrass.io/register/?referralCode=GiZpYLN0mWb0Y7a', 'Grass has raised $4.5M in funding from investors like Polychain, Hack VC and Tribe Capital. The company has 4 active competitors, including 1 that is funded. Its top competitors are Skillful AI, HapticAI and Decentralized Machine Learning.', 'Tahap rumput 2 menangkap jaring Daftar: \r\n\r\nhttps://app.getgrass.io/ \r\n- Daftar dengan Email \r\n- Instal Ekstensi \r\n- Selesai\r\n\r\nAirdrop grass stage 2 saat ini memasuki epoch 7', 'Airdrop Finder', '26-04-2025'),
(2, '1', '0xpctB5JEOewKRvTINonsQSZ3A9Cr4jyLmHiX86hgF0WxkufPb2D', 'Humanity protocol', '$50M', 'testnet', 'phase 2', 'chrome/wallet', 'claim rwt & bridge', 'staging.hptestingsite.com/login?ref=nxyraaa', 'on 27 Jan 2025, Humanity Protocol secured a $20M funding round co-led by Pantera and Jump, raising at a FDV of $1.1B.\r\nOther investors include Animoca, Shima, Hashed, Mechanism Capital, Cypher, and more.', 'â€¢ klik atau copy link diatas lalu\r\n\r\n- connect wallet \r\n- buat username\r\n- masukkan kode: nxyraaa(optional)\r\n- submit\r\n- verifikasi email\r\n- klaim faucet\r\n- bridge sepolia testnet ke thp dan sebaliknya\r\n\r\nâ€¢ optional task\r\n- connect discord,x,github,linkedln,telegram dan google\r\n\r\nâ€¢ update deploy kontrak(non official)\r\nhttps://contracts.mintair.xyz/', 'AFA Ã— Finder', '06-05-2025'),
(7, '2', '0xKwRgWltnm2yda7QJALPVCBEZFMk5jOvU9o8isNhI0eczu36DTH', 'Multiple network', '$2M', 'depin', 'Q2', 'extension', 'earning', 'https://www.app.multiple.cc/#/signup?inviteCode=r3F6z1r7', 'Valuation: $ 30.00M\r\nInvestor Okx venture,Youbi capita,Bitrise Capital more cryptorank...', 'â€¢ Multiple Network: Ekstensi Chrome Sudah Aktif! \r\n\r\n- Buka tautan & hubungkan wallet\r\n- Daftar & verifikasi email\r\n- Unduh ekstensi: Multiple Lite Node - Masuk dengan email yang sama \r\n- jika menggunakan windows unduh multiple for windows\r\n- Selesai\r\n\r\nâ€¢ Zealy task(optional)\r\n\r\n- klik link berikut https://zealy.io/cw/multiplenetworkpioneers/questboard/\r\n- kerjakan semua task untuk masuk dalam leaderboard \r\n- setiap peserta yang berada di top 1-30 akan mendapatkan $MTP.quest ini berlangsung sampai 30 mei 2025', 'AFA', '23-05-2025'),
(3, '2', '0xIgUwjWGO6p4ny0FVsqcD2dJuHA7C98MkTXiReQfbZz3oErP1KL', 'Despeed', 'TBD', 'depin', 'Giga cycle', 'extension', 'earning byte', 'https://app.despeed.net/register?ref=8NUsrx2CVXi2', 'Season 3', 'Klik link diatas\r\n\r\n- buat username password \r\n- klik download extension \r\n- selesaikan semua tugas seperti konek x dan discord untuk mendapatkan byte tambahan \r\n- login diexstension \r\n- selesai\r\n\r\noptional\r\n\r\n- buka discord dan join server despeed\r\n- cari retweet\r\n- pastikan akun discord telah konek enangge\r\n\r\ndan selesaikan tugas enangge untuk mendapatkan byte tambahan...', 'Cryptorank', '02-05-2025'),
(4, '2', '0x8CxsQhidLgpD7KzrX26lfjS4uno0RGq9JbvAtkcEPyZaWBOF3w', 'Nodepay', '$7M', 'depin', 'season 5', 'Extension', 'Earning pts', 'https://app.nodepay.ai/register?ref=rxE2bAwLpblSTqo', 'listing platform: Gate.io,Okx,Bitget,Mexc\r\nInvestor: Animoca Brands,Mirana,Jump Crypto,ElevateVentures,more', '1 buat username password \r\n2 code: rxE2bAwLpblSTqo\r\n3 Klik \"Register\"\r\n4 download extensi Nodepay\r\n5 selesaikan semua task dan badge untuk mendapatkan pts tambahan \r\n\r\n\r\nNodepay saat ini sudah memiliki aplikasi. Silahkan download di play store \"nodepay\" dan tinggal login.', 'Airdrop Finder', '26-04-2025'),
(6, '2', '0xxrUcwmQIHRbaO9E35D0ANPMWiKXudCnh6TyzS4v7B28FtfZopG', 'Dawn', '$35.5M', 'depin', 'Q1', 'Extension', 'earning pts', 'cwmx064i', 'Built on Solana Blockchain, Backed by Top Tier VC : DragonFly , Wintermute, Etc \r\n$35.5M Funding', '\r\nBagaimana cara mendapatkan poin? \r\n\r\n- Instal Ektension \r\n- Buka & Daftar \r\n- Masukkan Kode: cwmx064i\r\n- Klik Daftar \r\n- Klik 2x (Tutup Ektension) \r\n- Periksa Email  \r\n- Verifikasi Email \r\n- Buka Ektension \r\n- Masuk dengan Kata Sandi Anda \r\n- mendaftar selesai\r\n- Gunakan browser Kiwi atau Google Chrome / Brave \r\n- Klik hadiah Boost \r\n- Selesaikan tugas media sosial', 'Airdrop Finder', '26-04-2025'),
(8, '2', '0xcxryRkAgBdMoDEzLpZ58KnbVFJl4IHGs307WhQuTUeqmPf6jwN', 'Depined', '$750k', 'depin', 'epoch 16', 'extension', 'earning pts', 'DECoPzd1VUr03M', 'The AI & Rendering DePIN SuperCloud Designed for Retail Users | Incubated by \r\n@Chain_GPT', '- Gunakan Browser Kiwi/misses \r\n- Instal Ekstensi: Depined \r\n- Daftar dengan email \r\n- Masukkan Kode: DECoPzd1VUr03M', 'Airdrop Strategy', '26-04-2025'),
(10, '3', '0xyShZutIzDEVW0sa3QwMxg2picRve5GOK64lBmJqbjF8CNULAoX', 'Kaleido finance', 'TBD', 'mining', 'phase 1', 'Chrome', 'Mining kld', 'https://kaleidofinance.xyz/testnet?ref=17ADAKCP', 'Kaleido Finance is a peer-to-peer decentralized lending and borrowing protocol powered by advanced AI Agents algorithms. Kaleido revolutionizes DeFi by offering personalized and optimized financial services to users on  Abstract Chain.', '-Hubungkan Dompet Baru\r\n- Selesaikan Tugas\r\n- Menambang dengan Peramban Anda\r\n- Menambang $KLD langsung dari perangkat Anda secara daring & luring \r\n- Selesai', 'Airdrop Finder', '05-05-2025'),
(11, '2', '0xHfiPEUrzTtw9gDbAhV2WZk86v0JRS7jGqdFxMIyKeacXCQoON4', 'Nodego', '$8M', 'depin', 'early', 'extension', 'Earning', 'https://app.nodego.ai/r/NODE7AC15B55A971', 'Earn Rewards Daily: Get rewarded automatically for your contribution to the decentralized network. \r\nNodeGoAI lets users share and trade their unused computing power on a decentralized network', '- Buat Akun Email \r\n- Unduh Ekstensi DI SINI \r\n- Masuk ke Akun Anda \r\n- Klik Hubungkan \r\n- Buka Dasbor -> Hadiah \r\n- Klaim Poin Harian \r\n- Selesaikan Tugas yang Tersedia \r\n- selesaikan semua task social media dan Klaim Poin', 'Airdrop Finder', '26-04-2025'),
(14, '2', '0xtVZMQkcw7pesTx6fhmyUE1zHKPJXiOgCF9qN40aWIj5lvA2u8L', 'Gradient', 'TBD', 'depin', 'season 1', 'extension', 'earning', 'https://app.gradient.network/signup?code=D9YU37 ', 'Jika Anda bergabung, harap jalankan node Anda selama 72 jam atau Anda tidak akan memenuhi syarat...', 'Gradient Season 1 Live \r\n\r\n- klik https://app.gradient.network/signup?code=D9YU37 - daftar dengan google \r\n- masukkan kode bonus D9YU37\r\n- hubungkan & Ikuti twitterðŸ•Š \r\n- instal Ekstensi\r\n- selesai', 'AFA', '22-04-2025'),
(15, '1', '0xP60CdtTRI2sZGjFX8gVvAiy5uSHz1NqOaokWU9JLDKclwm3ebB', 'Xos', '$55M', 'testnet', 'launch on mey', 'chrome/wallet', 'daily claim', 'https://X.ink/SL0NUM', 'XOS Testnet is launching this May.\r\nBuilders, get ready to deploy', '- Daftar: X.ink/SL0NUM\r\n- Konfirmasi Kode \r\n- Hubungkan Dompet Baru \r\n- Ikat alamat SOL baru \r\n- Hubungkan DC & X \r\n- Draw & Check in Setiap Hari \r\n- Bergabunglah dengan guild klaim peran di Discord: https://guild.xyz/xos', 'AFA', '22-04-2025'),
(16, '1', '0x2Wq6X0pfEhIuLCFtw3yMPZgcKi8BHaUTzbseR5VQDk9oJ4OAvx', 'Mango', '$13.5M', 'testnet', 'event has ended', 'Mango wallet', 'Claim point', 'https://task.testnet.mangonetwork.io/?invite=NdruEb', 'Event has ended', 'Mango Wallet Testnet \r\n\r\n- Download Mango Wallet extension \r\n- Backup Phrases \r\n- Click Faucet > Claim > Connect New EVM Wallet > Claim Gas \r\n- Go to Event Page \r\n- Complete Onchain Task (Swap, Bridge) \r\n- Login Daily \r\n- Done', 'Airdrop Finder', '26-04-2025'),
(18, '1', '0xp9tSUFh7IT30PWxZBRLj8DsGKOwJNnyq2e6buz1gidma5QX4Vo', 'Chain opera', '$17M', 'testnet', 'season 2', 'chrome/wallet', 'complete task', 'https://chainopera.ai/quest/?inviteCode=QSQXYTOM', 'Season 2 of airdrop campaign from ChainOpera project has started. We can complete social tasks and get the new badge and points for it. Please note that you need to invite 10 friends to complete the â€œInvite New Usersâ€ task.', '\r\nâ€¢ Proyek Layer 1 Baru \r\n- Bind X & DC \r\n- Selesaikan 6 Tugas \r\n- Kirim Kode: QSQXYTOM\r\n- Klaim Lencana Awal\r\n\r\nKode ini Terbatas...\r\n\r\nâ€¢daily checkin dan claim\r\nhttps://chat.chainopera.ai/', 'Airdrop Strategy', '12-05-2025'),
(19, '1', '0xyi67ZIT9XJoun3gRbhkLcpqCSmHENPKVta1jwlADf0rFv58zG4', 'Interlink', '$20M', 'testnet', 'Q1', 'App', 'daily claim', '147700834208', 'Claim ITLG Every Day & ITLG Will Convert to ITL Tokens in Q3...', 'Airdrop Baru: Interlink \r\nHadiah: 1510 ITLG (Untuk Semua) \r\n- Daftar: https://interlinklabs.ai/referral?refCode=147700834208\r\n- Unduh Aplikasi \r\n- Pindai Wajah \r\n- Klik home\r\n- Masukan Referral(untuk mendapatkan bonus 1510 ITLG)\r\n- Bind: 147700834208\r\n- Dapatkan 1500 ITLG \r\n- Selesai  Klaim ITLG Setiap Hari', 'Airdrop Finder', '10-05-2025'),
(21, '4', '0x24gzTmJiaXuCts5OUPol8N3qAcvGFdMwQH0kKfBbVhjIySrL1e', 'Hodl high', '$21M', 'miniapps', 'season 2', 'telegram', 'claim block', 'https://t.me/cube_hodl_bot/app?startapp=refw7L9xZ', 'Cube Exchange, a hybrid crypto trading platform yet to launch publicly, has raised $12 million in a Series A funding round. 6th Man Ventures led the round, with GSR Markets, ParaFi Digital, Susquehanna Private Equity Investments, Everstake Capital and others participating.valuation $100M', '- klik link reff\r\n- selesaikan verifikasi(kyc)\r\n- claim 50 block setiap hari\r\n- mainkan permainan dan kumpulan block\r\n- selesai ', 'Cryptorank', '12-05-2025'),
(22, '2', '0xeB8tAN4u7IXJTgafZKdR5coDbUpQHEmz6wqirl1GjknyM9V3s2', 'Primus', '$6.5M', 'depin', 'early', 'extension', 'daily claim', '3DFBDR2', 'Primus, DePIN for Useful Data on Onchain. $6.5M Funding. Backed by VanEck.', 'â€¢ GABUNG AIRDROP\r\n- Instal ekstensi Primus \r\n- Buka ekstensi \r\n- Kode:  3DFBDR2\r\n- Klik \"Konfirmasi\" \r\n- Hubungkan dompet \r\n- Menu \"Attestation\" \r\n- Verifikasi data \r\n- Menu \"Achievements\" \r\n- Lakukan tugas Verifikasi data seperti menghubungkan X dan Google.', 'Duta Crypto', '12-05-2025'),
(23, '2', '0xi76AuqGkEvphB1JXDCMWSOjUKbV4y89THwdzQLFxm0fa35sngr', 'Solix', '$29,5M', 'depin', 'early', 'extension', 'earning points', 'https://dashboard.solixdepin.net/sign-up?ref=LD9ZlBUB', 'Solid, Project DePIN. Funding $29,5M. Backed by Eclip Foundation.', '- klik link diatas\r\n- Masukkan email & password\r\n- Code: LD9ZlBUB\r\n- Klik \"Continue\"\r\n- Login app\r\n- Kerjakan task', 'Duta Crypto', '12-05-2025'),
(24, '5', '0x0necJkMhZ65GC81rXyqz3WxisaLpOjU7RwE4VKfPBdgvtmbSAF', 'Beem', '$4M', 'other', 'early', 'browser', 'claim domain', 'https://access.beem.me?ref=noxyid66', 'Beem has raised a total of $4M from 1 Seed round on Feb 16, 2022 from Investors like 5Lion Ventures and Ascension', '- klik link diatas\r\n- masukan nomor hp/email\r\n- masukan nama domain yang anda inginkan dan submit\r\n\r\n#ikuti social media Beem seperti x dan discord untuk informasi mendatang...', 'Airdrop Finder', '12-05-2025'),
(25, '6', '0xBxKZsNQPO6g7SJa5ubL8WmCqkp19Dlv4cAF2VdXGj3eTUzhMRn', 'Phemex', '$1500', 'giveaway', 'end 2 Juni 2025', 'chrome', 'clear task', 'https://quest.intract.io/quest/68235423df282d48c7c231dc?referralCode=Js57od&referralSource=QUEST_PAGE&referralLink=https%3A%2F%2Fquest.intract.io%2Fquest%2F68235423df282d48c7c231dc%3Fcampaign_initiator_type%3Dwidget%26campaign_initiator_id%3D651cd512bc5d8c0ec7266639%26card_position%3D0', 'Airdrop end 28 mei 2025', '- click link diatas\r\n- buat akun quest intract(jika belum ada)\r\n- konek semua sosmed seperti x,dc,tele dll\r\n- selesaikan semua task', 'Intract Quest', '19-05-2025'),
(26, '6', '0xkLSjgdP5vuEhJon798DIMpZX4tfUexTNHzBK1W2CV36yFGm0Qb', 'Star riser', '$500', 'giveaway', '7 Juni 2025', 'Chrome', 'clear task', 'https://quest.intract.io/quest/68239f31df282d48c7c2cca8?referralCode=Js57od&referralSource=QUEST_PAGE&referralLink=https%3A%2F%2Fquest.intract.io%2Fquest%2F68239f31df282d48c7c2cca8%3Fcampaign_initiator_type%3Dwidget%26campaign_initiator_id%3D651cd512bc5d8c0ec7266639%26card_position%3D1', 'Airdrop end 18 day in post', '- click link diatas\r\n- buat akun quest intract(jika belum ada)\r\n- konek semua sosmed seperti x,dc,tele dll\r\n- selesaikan semua task', 'Intract Quest', '19-05-2025');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`hash`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `list`
--
ALTER TABLE `list`
  MODIFY `hash` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
