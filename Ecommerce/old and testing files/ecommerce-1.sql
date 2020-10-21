-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 01:12 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Accnt_no` int(30) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `Username`, `Accnt_no`, `Address`, `phone`, `email`) VALUES
(1, 'varsha', 1234678, 'asadafs', 0, 'asdf@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product_test`
--

CREATE TABLE `product_test` (
  `id` int(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_quantity` int(100) NOT NULL,
  `product_price` int(100) NOT NULL,
  `p_description` varchar(1000) NOT NULL,
  `img_link` varchar(500) NOT NULL,
  `other` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_test`
--

INSERT INTO `product_test` (`id`, `category`, `product_id`, `product_name`, `product_quantity`, `product_price`, `p_description`, `img_link`, `other`) VALUES
(3, 'comp', 'c_101', 'DELL laptop', 10, 27000, 'Processor: 7th Gen Intel Core i3-7100U processor, 2.4 GHz base processor speed Operating System: This is an Ubuntu based laptop. Requires separate purchase and installation of operating system software (like Windows), not included in the box. Refer to Dell website for drivers. Display: 14-inch HD (1366*768) display | Anti glare display Memory & Storage: 4GB DDR4 RAM with Intel HD Graphics | Storage: 1TB HDD Design & battery:Laptop weight:2 Kg | Lithium battery Warranty: This genuine Dell laptop ', 'images/i12.png', ''),
(4, 'comp', 'c_102', 'HP', 10, 32000, 'Processor: 7th Gen Intel Core i3-7100U processor, 2.4GHz base processor speed, 2 cores, 3MB cache\r\nOperating System: Pre-loaded Windows 10 Home with lifetime validity\r\nDisplay: 15.6-inch FHD (1920x1080) display\r\nMemory & Storage: 4GB DDR4 RAM with Intel HD 620 Graphics | Storage: 1TB HDD\r\nDesign & battery: Laptop weight: 2.04 kg | Lithium battery\r\nWarranty: This genuine HP laptop comes with 1 year domestic warranty from HP covering manufacturing defects and not covering physical damage. For more', 'images/i13.png', ''),
(13, 'comp', 'c_103', 'Dell A261102SIN8 18.5-inch All-in-One Desktop', 10, 37000, '3.90GHz Pentium i3-7100 processor\r\n4GB DDR4 RAM\r\n1TB 7200rpm hard drive\r\n18.5-inch screen, Intel HD Graphics 630 with shared graphics memory graphics\r\nWindows 10 Home Single Language operating system', 'images/i14.png', ''),
(14, 'comp', 'c_104', 'HP AIO 20-C102IL 19.5-Inch Screen All-In-One Desktop', 10, 25000, '49.53 cm (19.5 in) diagonal widescreen full high-definition VA WLED-backlit display\r\nIntel Celeron J3060 (Braswell-D) Processor, Molokai-U Motherboard\r\n4 GB DDR3L-1600 RAM, 1 TB SATA 7200 rpm ROM\r\nDOS 2.0, Integrated Intel HD Graphics, Integrated speakers\r\nIntegrated Bluetooth 4.0 and Wireless LAN 802.11b/g/n featuring 2.4 GHz 1x1 technology\r\nUltra Slim Tray SuperMulti DVD Burner drive\r\n1 Year Warranty', 'images/i14.png', ''),
(15, 'comp', 'c_105', 'Acer Aspire 3 UN.GNVSI.001 15.6-inch Laptop ', 10, 18000, '1.8GHz AMD Dual-Core Processor E2-9000 processor\r\n4GB DDR4 RAM\r\n1TB 5400rpm hard drive\r\n15.6-inch screen, AMD Radeon Graphics\r\nWindows 10 Home 64Bit operating system\r\n5.5 hours battery life, 2.1kg laptop', 'images/i17.png', ''),
(16, 'comp', 'c_106', 'Dell Inspiron 5370 ', 10, 61000, 'Processor: Intel Core i5-8250U processor, 3.4 GHz base processor speed, 6MB cache\r\nOperating system: Pre-loaded Windows 10 with lifetime validity\r\nDisplay: 13.3-inch FHD (1920 x 1080) LED display | Anti-glare LED-backlit display\r\nMemory & Storage: 8GB DDR RAM with Intel UHD 620 Graphics | Storage: 256GB SSD\r\nDesign & battery: Thin and light design | Laptop weight: 1.50kg | Lithium battery\r\nWarranty: This genuine Dell laptop comes with 1 year onsite domestic warranty from Dell covering Hardware Issues and not covering physical damage. For more details, see Warranty section below.\r\nPre-installed Software: MS Office Home & Student 2016 |In the Box: Laptop with included battery and charger\r\nPorts & CD drive: 3 USB 3.1, 1 HDMI, 1 SD card reader, 1 Audio-out | Without CD drive', 'images/i12.png', ''),
(17, 'comp', 'c_107', 'LG 19CH300A 18.5-inch All-in-One Desktop ', 10, 14000, '1.44GHz Intel Atom Z8300 processor\r\n2GB DDR3L RAM\r\n32GB hard drive\r\n18.5-inch screen, Intel HD Graphics\r\nWindows 10 Home operating system', 'images/i14.png', ''),
(18, 'comp', 'c_108', 'Lenovo 520 22IKU AIO 21.5-inch All-in-One Desktop', 10, 36000, '2.00GHz Intel Core i3-6006U 6th Gen processor\r\n4GB DDR4 RAM\r\n1TB 5400rpm hard drive\r\n21.5-inch screen, Integrated Graphics\r\nDOS operating system', 'images/i14.png', ''),
(5, 'ent', 'e_101', 'PIONEER DVD PLAYER DV-3052V', 10, 8000, 'This Pioneer DVD player is guaranteed to play DVDs from any country on any TV - PAL and NTSC DVDS from region 0-9\r\nPlayback Discs DVD/SVCD/VCD/CD/ CD-R/-RW/ DVD-R/-R DL/-RW (Video Mode, VR Mode)/ DVD+R/+R DL/+RW (Video Mode)\r\nOffers you high-quality audio and video. HDMI Output Up converting up to 1080p DivX Playback, USB Input\r\nRestoring sound quality: When listening to compressed audio files such as MP3 and WMA, the Sound Retriever upscale the quality', 'images/i33.png', ''),
(6, 'ent', 'e_102', 'Philips MMS8085B/94 2.1 Channel Convertible Multimedia Speaker System', 10, 7450, 'USB Direct for easy MP3 music playback\r\nRich bass\r\n80 W sound output and bluetooth connectivity\r\n', 'images/i19.png', ''),
(19, 'ent', 'e_103', 'Sony 138.8 cm (55 inches) Bravia 4K Ultra HD Smart LED TV ', 10, 104900, 'Resolution: 4K UHD (3840 x 2160p) | Refresh Rate: 50 hertz\r\nDisplay: 4K HDR | 4K X-Reality Pro | Motionflow XR\r\nSmart TV Features: Android TV | Voice Search | Google Play | Chromecast | Netflix Recommended | Amazon Prime Video | HDR Gaming\r\nConnectivity: 4 HDMI ports to connect set top box, Blu Ray players, gaming console | 3 USB ports to connect hard drives and other USB devices\r\nSound output: 20 Watts Output | Bass Reflex speakers | ClearAudio+ technology | TV MusicBox\r\nInstallation: For installation/wall mounting/demo of this product once delivered, directly contact Sony at 18001037799 and provide product\'s model name and seller\'s details mentioned on your invoice. The service center will allot you a convenient slot for the service\r\nWarranty: 1 year standard warranty from Sony', 'images/i28.png', ''),
(20, 'ent', 'e_104', 'JBL T450BT Extra Bass Wireless On-Ear Headphones with Mic', 10, 2500, 'JBL Pure Bass sound- Experience superior JBL sound with powerful bass that truly packs a punch\r\n11-hour battery life- Built-in rechargeable Li-ion battery supports up to 11 hours of playtime\r\nCall and music controls on earcup- Control music playback and answer calls on the fl y with buttons and microphone placed conveniently on the earcup.\r\nFlat-foldable, lightweight and comfortable- Lightweight materials make these headphones comfortable over your ears, and a rugged construction ensures these fold and unfold perfectly over the years.\r\n32mm Dynamic Driver- Under the hood, a pair of 32mm drivers punch out some serious bass, reproducing the powerful JBL Pure Bass sound you’ve experienced in much bigger venues\r\nWireless Bluetooth Streaming- Wirelessly stream high-quality sound from your smartphone or tablet\r\n1 year manufacturer’s warranty', 'images/i26.png', ''),
(21, 'ent\r\n', 'e_105', 'Sanyo 107.95 cms (43 inches) LED TV', 10, 36000, 'Resolution: Ultra HD 4K (3840x2160) | Refresh Rate: 60 Hz\r\nDisplay: IPS 4K Display | 1.07 Billion colour palette | HDR 10\r\nSound: 20W Output | Dolby Digital | Sound Out Feature for Home Theater systems\r\nSmart TV Features: Google Certified Android TV | Android Oreo 8.0 | Voice Search through Google Assistant | Chromecast Built-in\r\nInstallation: For requesting installation/wall mounting/demo of this product once delivered, please directly call Sanyo at 18004195088 and provide product\'s model name as well as seller\'s details mentioned on the invoice\r\nWarranty Information: 1 year warranty provided by Sanyo from date of purchase', 'images/i29.png', ''),
(22, 'ent', 'e_106', 'JBL Flip 4 Portable Wireless Speaker with Powerful Bass', 10, 7000, 'Wireless Bluetooth Streaming\r\n12 hours of playtime\r\n3000mAH Rechargeable Battery\r\nIPX7 Waterproof\r\nJBL Connect+\r\nSpeakerphone\r\nVoice Assistant Integration', 'images/i21.png', ''),
(23, 'ent', 'e_107', 'TCL 99.8 cm (40 inches) 40S62FS HD Smart LED TV', 10, 20000, 'Full HD (Resolution: 1920x1080), Refresh Rate: 60 hertz\r\nConnectivity: 3 HDMI, 2 USB\r\nSound output: 16 W\r\nWarranty Information: 18 months warranty provided by the manufacturer from date of purchase', 'images/i29.png', ''),
(24, 'ent', 'e_108', 'Sony MDR-EX150AP In-Ear Headphones with Mic', 10, 900, 'In-line mic for hands-free calling\r\n9mm neodymium drivers for powerful, balanced sound\r\nLightweight for ultimate music mobility\r\nComfortable, secure-fitting silicone earbuds for long listening hours\r\nMatch your style with vivid colors\r\nShiny metallic finish housing\r\nFrequency Range: 5Hz to 24kHz. 1 year manufacturer warranty', 'images/i35.png', ''),
(25, 'ent', 'e_109', 'Sanyo (43 inches) LED TV', 10, 23000, 'Resolution: Ultra HD 4K (3840x2160) | Refresh Rate: 60 Hz\r\nDisplay: IPS 4K Display | 1.07 Billion colour palette | HDR 10\r\nSound: 20W Output | Dolby Digital | Sound Out Feature for Home Theater systems\r\nSmart TV Features: Google Certified Android TV | Android Oreo 8.0 | Voice Search through Google Assistant | Chromecast Built-in\r\nInstallation: For requesting installation/wall mounting/demo of this product once delivered, please directly call Sanyo at 18004195088 and provide product\'s model name as well as seller\'s details mentioned on the invoice\r\nWarranty Information: 1 year warranty provided by Sanyo from date of purchase', 'images/i31.png', ''),
(1, 'mob', 'm_101', 'vivo', 10, 18000, '12MP+5MP dual pixel rear camera.\r\nMemory, Storage & SIM: 6GB RAM | 64GB internal memory expandable up to 256GB | Dual SIM (nano+nano) dual-standby (4G+4G)\r\nAndroid v8.1 Oreo based on Funtouch OS 4.0 operating system with Qualcomm Snapdragon 660AIE octa core processor|3400mAH lithium-ion battery.', 'images/i2.png', ''),
(2, 'mob', 'm_102', 'vivo v9 pro', 10, 17000, 'Camera: 13+2 MP Dual rear camera| 16 MP AI Selfie camera\r\nDisplay: 15.51 centimetres (6.3-inch) FHD+ Fullview display 2.0 and 19:9 aspect ratio, 90 percent screen to body ratio\r\nMemory, Storage & SIM: 6GB RAM | 64GB storage expandable up to 256GB | Dual SIM with dual-standby (4G+4G)\r\nOperating System and Processor: Qualcomm Snapdragon 660AIE octa-core processor\r\nBattery: 3260 mAH lithium ion battery\r\nWarranty: 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box ', 'images/i2.png', ''),
(7, 'mob', 'm_103', 'Honor 7C (Blue, 3GB RAM, 32GB Storage)', 10, 8500, 'Camera: 13+2 MP Dual rear camera | 8 MP front camera with f2.0 aperture with soft selfie toning light. The charging time is 3 hours\r\nDisplay: 15.2 centimeters (5.99-inch) HD+ Full view LED capacitive touchscreen display with 720x1440 pixels, 268 ppi pixel density and 18:9 aspect ratio\r\nMemory, Storage & SIM: 3GB RAM | 32GB storage expandable up to 256GB with dedicated slot | Dual nano SIM with dual standby (4G+4G)\r\nOperating System and Processor: Android v8.0 EMUI Oreo operating system with 1.8G', 'images/i2.png', ''),
(8, 'mob', 'm_104', 'Realme 1 (Solar Red, 4GB RAM, 64GB Storage)', 10, 10500, 'Camera: 13 MP Rear camera with Fast facial unlock in less than 0.1 second with AI Recognition | 8 MP front camera\r\nDisplay: 15.2 centimeters (6-inch) Full HD 1080p capacitive touchscreen display with 2160x1080 pixels\r\nMemory, Storage & SIM: 4GB RAM | 64GB storage expandable up to 256GB | Dual nano SIM with dual standby (4G+4G)\r\nOperating System and Processor: Android v8.1 Oreo operating system with 8-cores CPU 2GHz MTK Helio P60 AI octa core processor\r\nBattery: 3410 mAH lithium ion battery provi', 'images/i2.png', ''),
(9, 'mob', 'm_105', 'Redmi 6A (Black, 2GBRAM, 16GB Storage)', 10, 6000, 'Camera: 13 MP Rear camera | 5 MP front camera\r\nDisplay: 13.84 centimetres (5.45-inch) HD+ display with 1440x720 pixels, 295 pixel density and 18:9 aspect ratio\r\nMemory, Storage & SIM: 2GB RAM | 16GB storage expandable up to 256GB with dedicated slot | Dual nano SIM with dual-standby (4G+4G)\r\nOperating System and Processor: Android v8.1 operating system with Mediatek Helio A22, 2.0Ghz Quad core processor with 12nm technology\r\nBattery: 3000 mAH lithium Polymer battery\r\nWarranty: 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase\r\nIncluded in box: Adapter, USB Cable', 'images/i2.png', ''),
(10, 'mob', 'm_106', 'Lenovo K8 Note (Venom Black, 4GB RAM, 64GB Storage)', 10, 9000, 'Camera: 13+5 MP Dual rear camera | 13 MP front camera with party flash\r\nDisplay: 13.97 centimeters (5.5-inch) Full HD IPS touchscreen display with 1920x1080 pixels\r\nMemory, Storage & SIM: 4GB RAM | 64GB storage expandable up to 128GB | Dual nano SIM with dual standby (4G+4G)\r\nOperating System and Processor: Android v7.1.1 Nougat operating system with 2.3GHz Helio X23 10-core processor\r\nBattery: 4000 mAH lithium Polymer battery with 15W Turbo charging providing talk-time of 24.7 hours and stand by upto 378 hours\r\nWarranty: 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase\r\nIncluded in box: 15W Turbo charger and USB Cable', 'images/i2.png', ''),
(11, 'mob', 'm_107', 'Honor 8X (Blue, 4GB RAM, 64GB Storage)', 10, 15000, '20MP+2MP AI dual rear camera | 16MP front facing camera\r\n16.51 centimeters (6.5-inch) display with 2340 x 1080 pixels resolution\r\nMemory, Storage & SIM: 4GB RAM | 64GB storage expandable up to 400GB | Dual SIM (nano+nano) with dual standby (4G+4G)\r\nAndroid v8.1 + EMUI8.2 Oreo operating system with 2.2GHz Kirin 710 octa core processor\r\n3750mAh lithium-polymer battery\r\nWarranty: 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries and 3 months for Data/USB cable from the date of purchase\r\nBox also includes: Charger, USB Cable, Warranty Card, Quick Start Guide, Eject tool, Protective Case', 'images/i2.png', ''),
(12, 'mob', 'm_108', 'Samsung Galaxy J8 (Black, 4GB RAM, 64GB Storage)', 10, 16000, 'Camera: 16+5 MP Dual rear camera with Auto focus and 4x Digital zoom | 16 MP front camera with F1.9 LED flash\r\nDisplay: 15.24 centimeters (6-inch) HD Super AMOLED capacitive touchscreen display with 1480x720 pixels\r\nMemory, Storage & SIM: 4GB RAM | 64GB storage expandable up to 256GB | Dual nano SIM with dual standby (4G+4G)\r\nOperating System and Processor: Android V8.0 Oreo operating system with 1.8GHz Qualcomm Snapdragon SDM450 octa core processor\r\nBattery: 3500 mAH lithium ion battery\r\nWarranty: 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase\r\nIncluded in box: Earphones, Travel adaptor, USB Cable', 'images/i2.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'qqq', 'qqq@gmail.com', 'b2ca678b4c936f905fb82f2733f5297f'),
(2, 'aaa', 'aaa@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_test`
--
ALTER TABLE `product_test`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
