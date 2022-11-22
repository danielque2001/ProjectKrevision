-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 10:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(1, 9, 1, 4),
(3, 9, 4, 6),
(4, 9, 12, 2),
(5, 13, 11, 1),
(6, 13, 27, 1),
(10, 15, 31, 2),
(11, 15, 28, 3),
(12, 15, 29, 3),
(17, 26, 30, 1),
(20, 26, 32, 1),
(21, 56, 28, 1),
(22, 56, 32, 1),
(23, 56, 30, 4),
(24, 58, 29, 1),
(25, 58, 32, 1),
(26, 58, 28, 1),
(27, 59, 31, 1),
(28, 59, 29, 1),
(29, 59, 32, 1),
(35, 60, 28, 1),
(36, 60, 31, 1),
(37, 60, 38, 1),
(38, 60, 51, 1),
(39, 68, 31, 1),
(40, 68, 28, 1),
(41, 68, 29, 1),
(42, 68, 48, 1),
(43, 68, 32, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`) VALUES
(1, 'Mechanical Keyboard Keycaps', 'laptops'),
(2, 'Pre-Built Mechanical Keyboards', 'desktop-pc'),
(3, 'Barebones (Layout)', 'tablets'),
(6, 'Mechanical Switches', '');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `sales_id`, `product_id`, `quantity`) VALUES
(14, 9, 11, 2),
(15, 9, 13, 5),
(16, 9, 3, 2),
(17, 9, 1, 3),
(18, 10, 13, 3),
(19, 10, 2, 4),
(20, 10, 19, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date_view` date NOT NULL,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `slug`, `price`, `photo`, `date_view`, `counter`) VALUES
(28, 6, 'Gateron Yellow Mechanical switch', '<p>Linear Switch</p>\r\n\r\n<p>1 set - 10 mechanical switches</p>\r\n', 'gateron-yellow-mechanical-switch', 120, 'gateron-yellow-mechanical-switch.webp', '2022-10-28', 3),
(29, 1, 'AKKO CARBON RETRO keycaps', '', 'akko-carbon-retro-keycaps', 2000, 'akko-carbon-retro-keycaps_1663046180.webp', '2022-10-28', 3),
(30, 2, 'GLORIOUS PC GAMING RACE GMMK PRO ', '<p>75% LAYOUT, Glorious Fox (linear) Pre-lubed switches</p>\r\n', 'glorious-pc-gaming-race-gmmk-pro', 14000, 'glorious-pc-gaming-race-gmmk-pro.webp', '2022-10-24', 1),
(31, 3, 'GLORIOUS GMMK 2 BAREBONES', '<h1>96%) MODULAR MECHANICAL KEYBOARD</h1>\r\n', 'glorious-gmmk-2-barebones', 4000, 'glorious-gmmk-2-barebones.webp', '2022-10-28', 2),
(32, 6, 'Gateron black Ink switches', '<p>Linear Switch</p>\r\n\r\n<p>Actuation: 60 g Bottom: 80 g Travel: 4 mm</p>\r\n', 'gateron-black-ink-switches', 140, 'gateron-black-ink-switches.jpg', '2022-10-28', 1),
(38, 1, 'AKKO KEYCAPS EVA-01 ', '<p>Akko Keycaps ASA Profile PBT Double-Shot</p>\r\n\r\n<p>Made through PBT double-shot process, These keys are resistant to friction, fading, and shining with crisp legends</p>\r\n', 'akko-keycaps-eva-01', 2400, 'akko-keycaps-eva-01.jpg', '2022-10-28', 10),
(39, 1, 'Akko Keycaps World Tour Tokyo', '<p>Akko Keycaps ASA Profile PBT Double-Shot</p>\r\n\r\n<p>Made through PBT double-shot process, These keys are resistant to friction, fading, and shining with crisp legends</p>\r\n', 'akko-keycaps-world-tour-tokyo', 2600, 'akko-keycaps-world-tour-tokyo.jpg', '2022-10-27', 1),
(40, 1, 'AKKO KEYCAPS MACAW ', '<p>Akko Keycaps ASA Profile PBT Double-Shot</p>\r\n\r\n<p>These keys are resistant to friction, fading, and shining with crisp legends</p>\r\n', 'akko-keycaps-macaw', 2400, 'akko-keycaps-macaw.jpg', '2022-10-26', 3),
(41, 1, 'AKKO KEYCAPS CHICAGO', '<p>Akko Keycaps ASA Profile PBT Double-Shot</p>\r\n\r\n<p>These keys are resistant to friction, fading, and shining with crisp legends</p>\r\n', 'akko-keycaps-chicago', 2400, 'akko-keycaps-chicago.jpg', '2022-10-27', 1),
(42, 6, 'AKKO CS OCEAN BLUE SWITCH', '<p>45 pcs per pack; 3 pin and fits keycaps with standard MX structure.</p>\r\n\r\n<p>Type: Tactile</p>\r\n\r\n<p>End Force: 36gf &plusmn; 5gf</p>\r\n\r\n<p>Total Travel: 4.0 &plusmn; 0.5mm</p>\r\n\r\n<p>Pre-Travel: 1.9 &plusmn; 0.3mm</p>\r\n\r\n<p>Tactile Position:0.5 &plusmn; 0.3mm</p>\r\n\r\n<p>Tactile Force: 45gf &plusmn;5gf</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'akko-cs-ocean-blue-switch', 500, 'akko-cs-ocean-blue-switch.png', '2022-10-26', 2),
(43, 6, 'AKKO CS STARFISH SWITCH', '<p>The starfish switch uses two-stage springs to offer different typing experiences. 45pcs</p>\r\n\r\n<p>Type: Linear</p>\r\n\r\n<p>Actuation Force : 50gf &plusmn; 5gf</p>\r\n\r\n<p>Total Travel: 4.0 &plusmn; 0.3mm</p>\r\n\r\n<p>Pre-Travel: 1.9 &plusmn; 0.3mm</p>\r\n\r\n<p>Tactile Position:N/A</p>\r\n\r\n<p>Tactile Force:N/A</p>\r\n', 'akko-cs-starfish-switch', 650, 'akko-cs-starfish-switch.png', '2022-10-26', 1),
(44, 6, 'TCC GOLD BROWN V3 SWITCH', '<p>TTC high-end gold shaft series, advance paragraphs, paragraph feel more clear and round, and have a better input feedback experience.&nbsp; 45pcs</p>\r\n\r\n<p>Type: Tactile End Force: 45gf &plusmn; 5gf</p>\r\n\r\n<p>Total Travel: 4.0 - 0.4mm</p>\r\n\r\n<p>Pre-Travel: 2.0 &plusmn; 0.4mm</p>\r\n\r\n<p>Tactile Position:0.9 &plusmn; 0.3mm</p>\r\n\r\n<p>Tactile Force: 55gf &plusmn;5gf</p>\r\n', 'tcc-gold-brown-v3-switch', 900, 'tcc-gold-brown-v3-switch.png', '2022-10-26', 1),
(45, 3, 'Keychron Q1 Barebones Space Grey', '<p>with Knob RGB LED Hotswap Aluminum Mechanical Keyboard</p>\r\n\r\n<p>Backlighting RGB LED Primary LEDs: RGB</p>\r\n\r\n<p>Features <strong>Barebones item!</strong> Does Not Include Switches or Keycaps Gateron screw-in PCB mount stabilizers Includes USB-C cable and USB-A to USB-C adapter Hotswap sockets Programmable with QMK and VIA Programmable knob is included Includes sound absorbing foam and case gaskets Knob color may be slightly different than the case color South-facing RGB LED Featuring new and improved aluminum case design and steel plate Easy-reach switch to toggle between Windows and macOS Aluminum frame.</p>\r\n', 'keychron-q1-barebones-space-grey', 8000, 'keychron-q1-barebones-space-grey.png', '2022-10-27', 1),
(46, 3, 'Glorious GMMK Modular', '<p>Mechanical Gaming Keyboard ISO Layout- RGB LED Backlit, Brown Switches, Hot Swap Switches (Black) (Tenkeyless)</p>\r\n\r\n<p>Product details Brand Glorious PC Gaming Race Compatible Devices Gaming Console Keyboard Description Gaming Special Feature Backlit Color Tenkeyless Item Dimensions LxWxH 1.73 x 15.87 x 7.2 inches High quality material</p>\r\n', 'glorious-gmmk-modular', 8000, 'glorious-gmmk-modular.png', '2022-10-27', 1),
(47, 3, 'ROP ALT HIGH-PROFILE BAREBONES ', '<p>SPECS:<br />\r\n67 keys<br />\r\nAnodized CNC machined aluminum frame<br />\r\nCustom PCB<br />\r\nHot-swap switch sockets<br />\r\nQMK firmware<br />\r\nPlate-mounted Cherry-style stabilizers<br />\r\nFloating key design<br />\r\nDual USB-C connectors<br />\r\nPCB compatible with 3-pin plate-mount switches and stabilizers only<br />\r\nHalo mechanical switches: 3 pin, plate mount<br />\r\nKailh Box mechanical switches: 3 pin, plate mount<br />\r\nKailh Pro mechanical switches: 3 pin, plate mount<br />\r\nKailh Speed mechanical switches: 3 pin, plate mount<br />\r\nGateron SMD mechanical switches: 3 pin, plate mount<br />\r\nCherry RGB mechanical switches: 3 pin, plate mount<br />\r\nAliaz mechanical switches: 5 pin, PCB mount<br />\r\nDimensions: 12.67 x 4.41 x 1.3 in (32.2 x 11.2 x 3.3 cm)<br />\r\nWeight: 43 oz (1,219 g)<br />\r\nKeyboard Configurator<br />\r\nINCLUDED<br />\r\nTwo-piece aluminum case w/ diffuser<br />\r\nPCB<br />\r\nPlate-mount stabilizers<br />\r\n56-inch USB cable<br />\r\nKeycap puller<br />\r\nSwitch puller<br />\r\n1-year Drop Warranty</p>\r\n', 'rop-alt-high-profile-barebones', 8300, 'rop-alt-high-profile-barebones.png', '0000-00-00', 0),
(48, 3, 'Epomaker GK87', '<p>87 Keys Mechanical Keyboard Kit<br />\r\nBackorder: Shipment will be available in 7 days after purchase<br />\r\nHotswap terminal, Compatible with multiple switches, supports Cherry Switch/ Gateron Switch/ Kailh BOX Switch and etc<br />\r\nStandard 87 keys tenkeyless layout, widely compatible with most keyboard<br />\r\n[GK87S kit ONLY] Bluetooth 5.1 wireless wired dual mode, connect up to 4 devices at the same time<br />\r\nDetachable Type-C cable, three ways of cable outlet<br />\r\nRGB SMD light, 16.8M multiple light effects</p>\r\n', 'epomaker-gk87', 1600, 'epomaker-gk87.png', '2022-10-28', 2),
(49, 2, 'Rakk Ilis RGB', '<p>OUTEMU RED</p>\r\n\r\n<p>PBT KEYCAPS</p>\r\n\r\n<p>Specification:<br />\r\n&nbsp; &bull; 96 Mechanical Switches<br />\r\n&nbsp; &bull; 50M-Click Lifespan<br />\r\n&nbsp; &bull; Up to 1000hz Rolling rate<br />\r\n&nbsp; &bull; N-Key Rollover<br />\r\n&nbsp; &bull; 16.8M Colors RGB Backlight<br />\r\n&nbsp; &bull; Hybrid 96-Key Layout<br />\r\n&nbsp; &bull; On-the-fly numpad mode/TKL Mode Switching<br />\r\n&nbsp; &bull; Removal customizable magnetic cover<br />\r\n&nbsp; &bull; Top-grade abs double shot keycaps<br />\r\n&nbsp; &bull; Rakk finetuner support<br />\r\n&nbsp; &bull; Non-slip rubber feet<br />\r\n&nbsp; &bull; Key puller holder<br />\r\n&nbsp; &bull; 1.8M Braided USB Cable</p>\r\n', 'rakk-ilis-rgb', 1800, 'rakk-ilis-rgb.jpg', '0000-00-00', 0),
(50, 2, 'ROG Strix Scope NX TKL Moonlight White', '<p>Wired mechanical RGB gaming keyboard for FPS games, with ROG NX switches, aluminum frame, and Aura Sync lighting.</p>\r\n\r\n<p>Created for FPS Gamers: the tenkeyless form factor provides more room to move the mouse, while the enlarged L-Ctrl key minimizes inadvertent pressing of other keys.</p>\r\n', 'rog-strix-scope-nx-tkl-moonlight-white', 7000, 'rog-strix-scope-nx-tkl-moonlight-white.png', '0000-00-00', 0),
(51, 2, 'RAKK LAM-ANG LITE', '<p>OUTEMU BLUE</p>\r\n\r\n<p>Specification<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Modular TKL Mechanical keyboard<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Ergonomic Designed Keyboard,<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Anti Ghosting &amp; N- Key Rollover<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Over 16 Million Colors<br />\r\n&bull;&nbsp;&nbsp; &nbsp;ABS Double Shot Injection Keycaps<br />\r\n&bull;&nbsp;&nbsp; &nbsp;87 key Standard QWERTY Layout (ANSI)<br />\r\n&bull;&nbsp;&nbsp; &nbsp;1000Hz Ultra Polling Rate<br />\r\n&bull;&nbsp;&nbsp; &nbsp;50M Click Lifespan<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Multimedia keys: Support w/FN key<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Type C Braided Cable<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Fully Modular<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Dedicated Volume and Brightness Control<br />\r\n&bull;&nbsp;&nbsp; &nbsp;PBT Keycaps White</p>\r\n', 'rakk-lam-ang-lite', 1800, 'rakk-lam-ang-lite.jpg', '2022-10-28', 1),
(52, 2, 'Rakk Tandus', '<p>Specification:<br />\r\n&nbsp; &bull; Modular Switch<br />\r\n&nbsp; &bull; Full Anti-Ghosting with 87 key rollover<br />\r\n&nbsp; &bull; Double Shot ABS Keycaps<br />\r\n&nbsp; &bull; Hot Swappble Switch for Any Outemu Switches</p>\r\n', 'rakk-tandus', 1200, 'rakk-tandus.jpg', '0000-00-00', 0),
(53, 2, 'ROG Falchion Ace', '<p>ROG Falchion Ace 65% compact gaming keyboard with pre-lubed ROG NX mechanical switches with ROG switch stabilizer, PBT doubleshot keycaps, sound-dampening foam, interactive touch panel, dual Type-C ports, three keyboard tilt angles, and cover case .</p>\r\n', 'rog-falchion-ace', 7800, 'rog-falchion-ace.png', '2022-10-26', 1),
(54, 2, 'Royal Kludge RK71', '<p>70% Wireless Mechanical Gaming Keyboard</p>\r\n\r\n<p>Brand: Royal Kludge<br />\r\nModel: RK71<br />\r\nKey Quantity: 71 Key<br />\r\nColor: White and Black<br />\r\nSwitch: Brown Switch, Red Switch<br />\r\nConnection: Bluetooth 3.0 + USB<br />\r\nMaterial: ABS<br />\r\nVoltage: 5V<br />\r\nSize: 33010237mm<br />\r\nWeight: 700g<br />\r\nSystem Support: Windows/Android/Mac OS/IOS/LINUX<br />\r\nBattery capacity: 1000mAh<br />\r\nBacklit: RGB Backlit<br />\r\nData cable type: USB-C</p>\r\n', 'royal-kludge-rk71', 1800, 'royal-kludge-rk71.png', '0000-00-00', 0),
(55, 2, 'Royal Kludge RK61', '<p>60% Wireless Mechanical Gaming Keyboard</p>\r\n\r\n<p>Size: 11.4x3.9x1.7 inches<br />\r\nLayout: 61 Keys<br />\r\nBacklight: SINGLE BACKLIGHT<br />\r\nMaterial: ABS<br />\r\nKeyboard Color: Black and White<br />\r\nSwitch Color: Brown and Red<br />\r\nModes: Bluetooth 5.0 / USB /2.4Ghz<br />\r\nVoltage: 5V<br />\r\nData cable type: USB-C<br />\r\nSystems Support: Windows XP/VISTA/7/8/10 with Bluetooth Adapter, IOS, macOS, Linux, Android<br />\r\nPackage:</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'royal-kludge-rk61', 1600, 'royal-kludge-rk61.png', '0000-00-00', 0),
(56, 2, 'CORSAIR K60 RGB PRO SE', '<p>Mechanical Gaming Keyboard CHERRY VIOLA &mdash; Black</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Weight 0.92kg<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Keyboard Backlighting RGB<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Keyboard Layout NA<br />\r\n&bull;&nbsp;&nbsp; &nbsp;HID Keyboard Report Rate 1000Hz<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Key Switches CHERRY&reg; VIOLA<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Matrix 104 Keys<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Keyboard Connectivity USB 3.0 or 3.1 Type-A<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Media Controls YN Yes<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Keyboard Type Size K60<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Keyboard Product Family K60<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Keyboard Rollover Full Key (NKRO) with 100% Anti-Ghosting<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Size(Full/TKL) Full Size</p>\r\n', 'corsair-k60-rgb-pro-se', 5800, 'corsair-k60-rgb-pro-se_1666772019.jpg', '0000-00-00', 0),
(57, 2, 'K70 RGB MK.2 SE', '<p>Mechanical Gaming Keyboard &mdash; CHERRY&reg; MX Speed</p>\r\n\r\n<p>Weight 1.25 kg<br />\r\nLighting RGB<br />\r\nKeyboard Layout UK<br />\r\nUSB Polling Rate 1,000Hz<br />\r\nKeyswitches CHERRY&reg; MX SPEED<br />\r\nUSB Pass-Through Port USB 2.0 Type-A<br />\r\nMatrix 105 Keys<br />\r\nConnectivity Wired<br />\r\nAdjustable Height Yes<br />\r\nMedia Controls YN Yes<br />\r\nKeyboard Type Size K70<br />\r\nKeyboard Product Family K70<br />\r\nKeyboard Rollover Full Key (NKRO) with 100% Anti-Ghosting<br />\r\nForm Factor Full Size<br />\r\nWired Connectivity USB 2.0 Type-A<br />\r\n&nbsp;<br />\r\nOn-Board Memory 8MB<br />\r\nNumber Onboard profiles 3<br />\r\nWIN Lock Dedicated Hotkey<br />\r\nMedia Control Dedicated Hotkeys, Volume Roller<br />\r\nPalm Rest Detachable with soft touch finish<br />\r\nKeyboard CUE Software Supported in iCUE<br />\r\nCable Type Fixed<br />\r\nKeyboard Cable Material Braided</p>\r\n', 'k70-rgb-mk-2-se', 7000, 'k70-rgb-mk-2-se.png', '2022-10-26', 1),
(58, 2, 'Steelseries Apex 3 TKL', '<p>Top Material: High Quality Polymer Frame<br />\r\nN-Key Roll Over: 24 Keys<br />\r\nAnti-ghosting: Gaming Grade<br />\r\nIllumination: 10-Zone RGB Illumination<br />\r\nWeight: 639 g / 1.41 lbs<br />\r\nHeight: 40 mm / 1.57 in<br />\r\nWidth: 364 mm / 14.3 in<br />\r\nDepth: 150 mm / 5.9 in</p>\r\n\r\n<p>Switch<br />\r\nType &amp; Name: SteelSeries Whisper-Quiet Switches</p>\r\n\r\n<p>Compatibility<br />\r\nOS: Windows, Mac OS X, Xbox, and PS4. USB port required</p>\r\n', 'steelseries-apex-3-tkl', 3000, 'steelseries-apex-3-tkl.jpg', '2022-10-26', 1),
(59, 2, 'APEX PRO MINI', '<p>&nbsp;</p>\r\n\r\n<p>World&#39;s fastest OmniPoint 2.0 adjustable switches with 11x quicker response and 10x swifter actuation</p>\r\n\r\n<p>Customize the sensitivity of every key from a speedy 0.2mm to a deliberate 3.8mm</p>\r\n\r\n<p>Program two different actions to the same key for powerful gaming shortcuts</p>\r\n\r\n<p>Compact 60% form factor with side-printed functions for full-size keyboard functionality</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'apex-pro-mini', 12000, 'apex-pro-mini.png', '2022-10-26', 1),
(60, 1, 'Olivia Keycaps', '<p>168 PBT cherry color keycaps, ANSI layout.</p>\r\n\r\n<p>This is a great choice for your DIY mechanical keyboard. 168 keys fit 61/87/104/108 mechanical keyboard keys.</p>\r\n', 'olivia-keycaps', 2000, 'olivia-keycaps.jpg', '2022-10-27', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pay_id` varchar(50) NOT NULL,
  `sales_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'admin@admin.com', '$2y$10$F2NU1s4Ej1l4wofBm8QpvuVirzUmjRvEZHsxWTfXiOwE8yy/AluM2', 1, 'Admin', 'Ako', '', '', 'Screenshot 2022-08-09 221209.png', 1, '', 'BMEykRUczI2w3qQ', '2018-05-01'),
(28, 'quesada@user.com', '$2y$10$W0tJT71XaD.imbIZjtx6V.H9WPovwR11QbyyEtGfv4ZsoWh103dYe', 0, 'Joshua', 'Quesada', 'Carangian, Tarlac City', '09309309215', 'contactpic3.png', 1, '', '', '2022-09-20'),
(60, 'danielque2001@gmail.com', '$2y$10$kA9.Wwq5MkydHfNiZPZ4Me1auLesa6BNrSlaU5n58Way5V/ndFwNK', 0, 'Daniel John Rey', 'Que', 'Matatalaib, Tarlac city', '09093197731', 'contactpic4.jpg', 1, 'IeqDA82p6syO', '7DCyg8UbfGMtEAi', '2022-10-25'),
(68, 'isaidineedemail@gmail.com', '$2y$10$3xDg0Hq3bZ9Ovedd82HdeeIP/kJwY/lBS/8KyPlp2pbqU1vGMfaZu', 0, 'Aaron Joshua', 'Quesada', '', '', '', 1, 'XNrKG9ATZPg1', 'Sl9B6QORurL1JWh', '2022-10-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
