-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2024 at 08:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uttarakhand`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `city_place_id` int(10) DEFAULT NULL,
  `top_places` varchar(252) NOT NULL,
  `top_food` varchar(252) NOT NULL,
  `area_images` varchar(252) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated-on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `category`, `city_place_id`, `top_places`, `top_food`, `area_images`, `create_at`, `updated-on`) VALUES
(25, 'city', 5, 'maal devta', 'chken momoos', 'kasar-devi-temple-9952279.jpg', '2024-06-15 13:02:55', '2024-06-15 13:02:55'),
(26, 'city', 5, 'maal devta', 'chken momoos', 'kasar-devi-temple-6030388.jpg', '2024-06-15 13:02:55', '2024-06-15 13:02:55'),
(27, 'city', 5, 'maal devta', 'chken momoos', 'kasar-devi-temple-3928745.jpg', '2024-06-15 13:02:55', '2024-06-15 13:02:55'),
(28, 'city', 8, 'khirsu', 'arsa', 'kasar-devi-temple-6030388.jpg', '2024-06-15 13:12:06', '2024-06-15 13:12:06'),
(29, 'city', 8, 'khirsu', 'arsa', 'kasar-devi-temple-6030388.jpg', '2024-06-15 13:12:27', '2024-06-15 13:12:27'),
(30, 'city', 8, 'khirsu', 'arsa', 'kasar-devi-temple-6030388.jpg', '2024-06-15 13:12:27', '2024-06-15 13:12:27'),
(31, 'city', 8, 'pabou', 'jholi', 'php1.png', '2024-06-15 13:13:53', '2024-06-15 13:13:53'),
(32, 'city', 8, 'pabou', 'jholi', 'php1.png', '2024-06-15 13:13:57', '2024-06-15 13:13:57'),
(33, 'city', 8, 'pabou', 'jholi', 'php1.png', '2024-06-15 13:13:57', '2024-06-15 13:13:57'),
(34, 'city', 5, 'raipu8r', 'kux v', 'kasar-devi-temple-3928745.jpg', '2024-06-15 13:16:45', '2024-06-15 13:16:45'),
(35, 'city', 5, 'raipu8r', 'kux v', 'kasar-devi-temple-3928745.jpg', '2024-06-15 13:17:05', '2024-06-15 13:17:05'),
(36, 'city', 5, 'raipu8r', 'kux v', 'kasar-devi-temple-3928745.jpg', '2024-06-15 13:17:05', '2024-06-15 13:17:05'),
(37, 'place', 1, 'fdfdsfs', 'gobhi', 'kasar-devi-temple-3928745.jpg', '2024-06-15 14:03:18', '2024-06-15 14:03:18'),
(38, 'place', 1, 'fdfdsfs', 'gobhi', 'kasar-devi-temple-9952279.jpg', '2024-06-15 14:03:18', '2024-06-15 14:03:18'),
(39, 'place', 12, 'something', 'kadi chawal', 'kasar-devi-temple-9952279.jpg', '2024-06-15 17:31:29', '2024-06-15 17:31:29'),
(40, 'place', 12, 'something', 'kadi chawal', 'kasar-devi-temple-6030388.jpg', '2024-06-15 17:31:29', '2024-06-15 17:31:29'),
(41, 'place', 12, 'something', 'kadi chawal', 'kasar-devi-temple-3928745.jpg', '2024-06-15 17:31:29', '2024-06-15 17:31:29');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `blog_title` varchar(252) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `short_description` longtext NOT NULL,
  `long_description` longtext NOT NULL,
  `author` varchar(250) NOT NULL,
  `views` varchar(250) DEFAULT '1',
  `likes` varchar(250) NOT NULL,
  `meta_title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `blog_image` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `blog_title`, `slug`, `short_description`, `long_description`, `author`, `views`, `likes`, `meta_title`, `meta_keyword`, `meta_description`, `blog_image`, `created_at`, `update_at`) VALUES
(10, 4, 'Thrilling Escapades in the Heart of Uttarakhand: An Adventurer\'s Paradise', 'Thrilling-Escapades-in-the-Heart-of-Uttarakhand:-An-Adventurer\'s-Paradise', '<p>Discover the ultimate adventure in Uttarakhand, where the rugged terrain and breathtaking landscapes promise exhilarating experiences. From white-water rafting in Rishikesh to trekking in the Himalayas, embark on a journey filled with adrenaline and awe.\"</p>', '<p>Nestled in the northern part of India, Uttarakhand is a haven for adventure enthusiasts. This picturesque state, often referred to as the \'Land of the Gods,\' offers a plethora of activities that cater to thrill-seekers and nature lovers alike. Whether you\'re navigating the wild rapids of the Ganges in Rishikesh, trekking through the majestic trails of the Himalayas, or camping under the star-studded sky in the lush meadows of Auli, Uttarakhand promises an unforgettable adventure.</p>', 'jkjhkjhk', '408', '', 'ghg', 'hwllo', ' hwllo ', '1722241606_c6b5648f046caf86cc21.jpg', '2024-07-10 18:51:15', '2024-07-10 18:51:15'),
(11, 5, 'Exploring Tungnath: The Highest Shiva Temple and Trekking Paradise in Uttarakhand', 'Exploring-Tungnath:-The-Highest-Shiva-Temple-and-Trekking-Paradise-in-Uttarakhand', '<p>Discover Tungnath, the highest Shiva temple in the world, nestled in the majestic Himalayas of Uttarakhand. This blog explores the trekking routes, spiritual significance, and breathtaking views of Tungnath.</p>', '<p>Tungnath, situated in the Chamoli district of Uttarakhand, is renowned for housing the highest Shiva temple in the world. This ancient temple, perched at an altitude of 3,680 meters, is not only a significant pilgrimage site but also a popular trekking destination. The journey to Tungnath offers stunning views of the Himalayas, lush meadows, and serene landscapes. In this blog, we delve into the spiritual and adventurous aspects of Tungnath, providing insights into the trekking experience, the temple\'s history, and the surrounding natural beauty. Whether you\'re a devotee seeking spiritual solace or an adventure enthusiast looking for an exhilarating trek, Tungnath promises a memorable experience amidst the Himalayas.</p>', 'Gaurav ', '1', '', '', '', '', '1721453726_e96f3aeb575f0727fe75.jpg', '2024-07-20 11:05:26', '2024-07-20 11:05:26'),
(12, 3, 'Discovering Uttarakhand: Nature, Spirituality, and Adventure', 'Discovering-Uttarakhand:-Nature,-Spirituality,-and-Adventure', '<p>&nbsp;Explore Uttarakhand, where the Himalayas meet spirituality and adventure awaits at every turn. From serene Rishikesh to the majestic Jim Corbett National Park, this guide unveils the treasures of India\'s northern gem.</p>', '<p>Nestled in the lap of the majestic Himalayas, Uttarakhand beckons travelers with its enchanting blend of natural beauty, spiritual sanctity, and thrilling adventures. This northern Indian state is a haven for nature lovers, pilgrims seeking solace, and adrenaline junkies alike.</p>\r\n<p><strong>1. Rishikesh - Yoga Capital &amp; Adventure Hub</strong> Known as the Yoga Capital of the World, Rishikesh attracts spiritual seekers and adventure enthusiasts alike. Situated on the banks of the holy Ganges River, this serene town offers not only yoga and meditation retreats but also thrilling experiences like white-water rafting, bungee jumping, and trekking in the nearby Himalayan foothills. Visit the iconic Ram Jhula and Laxman Jhula bridges, explore ancient temples, or simply relax by the riverside to soak in the tranquil atmosphere.</p>\r\n<p><strong>2. Mussoorie - Queen of Hill Stations</strong> Perched at an altitude of 6,170 feet above sea level, Mussoorie is a charming hill station that offers panoramic views of the Garhwal Himalayas and the Doon Valley. Take a leisurely stroll along the Mall Road, visit the historic Gun Hill viewpoint for a mesmerizing sunset, or trek to the serene Kempty Falls for a refreshing dip in its cool waters. Mussoorie\'s pleasant climate and colonial architecture make it a perfect getaway for families and honeymooners alike.</p>\r\n<p><strong>3. Nainital - Lake District of India</strong> Nainital is famous for its pear-shaped lake surrounded by lush green hills, making it one of the most popular hill stations in Uttarakhand. Enjoy a boat ride on Naini Lake, visit the Naina Devi Temple for its spiritual significance, or take the scenic ropeway to Snow View Point for breathtaking vistas of the Himalayas. Nainital also offers opportunities for trekking, horse riding, and birdwatching in the nearby forests.</p>\r\n<p><strong>4. Haridwar - Gateway to the Gods</strong> Haridwar, literally meaning \"Gateway to the Gods,\" is a holy city located on the banks of the Ganges River. Witness the mesmerizing Ganga Aarti ceremony at Har Ki Pauri ghat, visit ancient temples like Mansa Devi and Chandi Devi, or embark on a pilgrimage to the nearby Chota Char Dham destinations of Yamunotri, Gangotri, Kedarnath, and Badrinath. Haridwar\'s rich cultural heritage and spiritual aura attract millions of devotees and tourists throughout the year.</p>', 'Gaurav ', '330', '', '', '', '', '1721477636_196642524da3379257f5.jpg', '2024-07-20 17:43:56', '2024-07-20 17:43:56'),
(13, 4, 'Rishikesh: The Yoga Capital on the Banks of the Ganges', 'Rishikesh:-The-Yoga-Capital-on-the-Banks-of-the-Ganges', '<p>Discover Rishikesh, where spirituality meets serenity. Explore yoga retreats, adventurous activities, and the tranquil banks of the Ganges in this iconic Indian city.</p>', '<p>Nestled peacefully on the banks of the sacred Ganges River, Rishikesh has earned its reputation as the Yoga Capital of the World. This serene city in Uttarakhand, India, attracts seekers of spirituality and adventurers alike, offering a unique blend of tranquil retreats and thrilling outdoor activities.</p>\r\n<p><strong>1. Spiritual Sanctuaries and Yoga Retreats</strong></p>\r\n<p>Rishikesh is synonymous with yoga, drawing practitioners from across the globe to its numerous ashrams and yoga centers. Whether you\'re a seasoned yogi or a novice seeking enlightenment, Rishikesh offers a variety of courses, workshops, and retreats tailored to every level and interest. Dive deep into meditation, learn ancient yogic practices, or simply rejuvenate your mind and body in the peaceful ambiance of ashrams nestled amidst the foothills of the Himalayas.</p>\r\n<p><strong>2. Adventure Amidst Scenic Landscapes</strong></p>\r\n<p>Beyond its spiritual allure, Rishikesh is a playground for adventure enthusiasts. The fast-flowing waters of the Ganges River provide thrilling opportunities for white-water rafting, kayaking, and river crossing under the watchful gaze of towering Himalayan peaks. For adrenaline junkies, bungee jumping from a towering cliff or embarking on a thrilling zip-lining adventure over the river valley promises an unforgettable experience amidst breathtaking natural beauty.</p>\r\n<p><strong>3. Serenity by the Riverside</strong></p>\r\n<p>The tranquil banks of the Ganges in Rishikesh offer a serene escape from the hustle and bustle of city life. Spend leisurely moments by the riverside, watching the sun dip behind the mountains in a spectacular display of colors during the evening Ganga Aarti ceremony. Cross the iconic suspension bridges of Ram Jhula and Laxman Jhula, adorned with ancient temples and vibrant marketplaces, each offering a glimpse into the city\'s rich cultural heritage and spiritual significance.</p>\r\n<p><strong>4. Culinary Delights and Cultural Experiences</strong></p>\r\n<p>Rishikesh\'s vibrant culinary scene reflects its diverse cultural influences, offering a variety of vegetarian delights and Ayurvedic cuisine to nourish the body and soul. Explore bustling markets filled with handmade artifacts, clothing, and spiritual artifacts, or attend enlightening talks and discourses by renowned spiritual leaders and gurus who frequent the city.</p>\r\n<p><strong>5. Gateway to Himalayan Treks and Pilgrimages</strong></p>\r\n<p>Rishikesh serves as a gateway to the Garhwal Himalayas, offering access to some of the most revered pilgrimage sites and trekking trails in Uttarakhand. Embark on a spiritual journey to the nearby sacred shrines of Badrinath, Kedarnath, Gangotri, and Yamunotri, collectively known as the Char Dham. Trek through lush green valleys, dense forests, and alpine meadows, encountering pristine natural beauty and ancient temples along the way.</p>', 'Gaurav ', '11', '', '', '', '', '1721477870_be1967aa267d78f41810.jpg', '2024-07-20 17:47:50', '2024-07-20 17:47:50'),
(14, 3, 'Exploring Nainital: Jewel of the Himalayas', 'Exploring-Nainital:-Jewel-of-the-Himalayas', '<p>Explore Nainital, the picturesque jewel of the Kumaon hills in Uttarakhand, India. Discover serene lakes, breathtaking Himalayan views, spiritual temples, and adventurous caves in this enchanting hill station.</p>\r\n<p>&nbsp;</p>', '<p>Nainital, nestled amidst the lush Kumaon hills of Uttarakhand, is a serene hill station renowned for its natural beauty, tranquil lakes, and panoramic vistas of the Himalayas. The centerpiece of Nainital is the shimmering Naini Lake, a pear-shaped water body surrounded by verdant hills. Boating on Naini Lake is a popular activity, offering visitors a peaceful retreat amidst stunning scenery.</p>\r\n<p>The town\'s spiritual heart lies at the Naina Devi Temple, dedicated to Goddess Naina Devi. Perched atop the northern shore of Naini Lake, the temple not only holds religious significance but also provides breathtaking views of the lake and the town below. The serene ambiance makes it a perfect spot for introspection and spiritual rejuvenation.</p>\r\n<p>For panoramic views of the majestic Himalayas, visitors head to Snow View Point. Accessible by cable car or a short trek, Snow View Point offers sweeping vistas of snow-capped peaks including Nanda Devi, Trishul, and Nanda Kot. It\'s an ideal spot for nature lovers and photographers seeking to capture the grandeur of the Himalayas against the backdrop of clear blue skies.</p>\r\n<p>A visit to the Eco Cave Gardens adds a touch of adventure to the Nainital experience. These interconnected natural caves and rock formations provide an educational yet thrilling exploration opportunity for families and adventure enthusiasts alike. Each cave is designed to represent different animals and habitats found in the region, offering a fun and informative outing amidst nature.</p>\r\n<p>Nainital also boasts a vibrant cultural scene with bustling markets around Mall Road, offering handicrafts, souvenirs, and delectable Kumaoni cuisine. Local delicacies such as Bal Mithai, Singauri, and Aloo ke Gutke tempt taste buds and provide a taste of authentic regional flavors.</p>\r\n<p>In conclusion, Nainital captivates visitors with its blend of natural beauty, spiritual serenity, and adventurous spirit. Whether you\'re exploring the lakeside tranquility of Naini Lake, marveling at Himalayan peaks from Snow View Point, or immersing yourself in the local culture and cuisine, Nainital promises a memorable and enriching experience. Plan your journey to this Himalayan gem and discover why Nainital remains a timeless destination for travelers seeking peace and natural beauty amidst the mountains.</p>', 'Gaurav ', '25', '', '', '', '', '1721478328_23f444d77283813ad062.avif', '2024-07-20 17:55:28', '2024-07-20 17:55:28'),
(15, 3, ' Nainital: Serenity Amidst the Himalayan Lakes', '-Nainital:-Serenity-Amidst-the-Himalayan-Lakes', '<p>Discover Nainital, a serene hill station in Uttarakhand known for its picturesque lakes, majestic Himalayan views, and rich cultural heritage. Explore Naini Lake, visit spiritual landmarks like Naina Devi Temple, and enjoy thrilling adventures at Snow View Point and Eco Cave Gardens. Join us on a journey through this Himalayan gem where tranquility meets adventure.</p>', '<p>Nainital, nestled amidst the verdant Kumaon hills of Uttarakhand, India, is a charming hill station that beckons travelers with its natural beauty and serene ambiance. The highlight of Nainital is undoubtedly Naini Lake, a tranquil water body surrounded by emerald hills, offering boating opportunities and breathtaking views. The town\'s spiritual sanctity is embodied by Naina Devi Temple, perched on the northern shore of Naini Lake, where visitors seek solace and marvel at panoramic vistas.</p>\r\n<p>For those seeking adventure and panoramic vistas, Snow View Point is a must-visit, accessible by a scenic cable car ride or a short trek. From here, one can marvel at the snow-capped peaks of the Himalayas, including Nanda Devi and Trishul, against a backdrop of clear blue skies. Nearby, Eco Cave Gardens provide an educational yet thrilling experience with interconnected caves and rock formations depicting local wildlife and habitats.</p>\r\n<p>Exploring Nainital isn\'t just about natural beauty; it\'s also about immersing oneself in its rich cultural tapestry. Mall Road, bustling with shops and eateries, offers a glimpse into local life and provides opportunities for shopping and savoring Kumaoni delicacies. The nearby Tiffin Top, also known as Dorothy\'s Seat, offers panoramic views of Nainital town and the surrounding hills, perfect for a leisurely stroll or a picnic.</p>\r\n<p>Beyond Nainital, nearby attractions like Bhimtal and Sattal beckon with their own scenic lakes and tranquil surroundings, ideal for a day trip or extended exploration. Whether you\'re seeking tranquility by the lakeside, spiritual solace at ancient temples, or adrenaline-pumping adventures amidst the Himalayas, Nainital offers a perfect blend of experiences for every traveler.</p>\r\n<p>Join us as we uncover the charm and allure of Nainital, where every corner reveals a new facet of its timeless beauty and cultural richness. Plan your journey to this Himalayan retreat and discover why Nainital continues to captivate hearts and minds as a must-visit destination in India.</p>', 'Gaurav ', '770', '', '', '', '', '1721478543_66b114f900748284f2df.jpg', '2024-07-20 17:59:04', '2024-07-20 17:59:04'),
(16, 1, 'Exploring Chamoli: A Journey Through the Heart of Uttarakhand’s Himalayas', 'Exploring-Chamoli:-A-Journey-Through-the-Heart-of-Uttarakhand’s-Himalayas', '<p>Nestled in the picturesque state of Uttarakhand, Chamoli is a captivating district known for its breathtaking landscapes, ancient temples, and thrilling trekking routes. Whether you\'re an adventure seeker, a nature lover, or a spiritual traveler, Chamoli offers a wealth of experiences amidst the serene beauty of the Himalayas.</p>', '<p>Chamoli, located in the northern state of Uttarakhand, is a gem in the Himalayas that boasts a stunning blend of natural beauty, cultural richness, and adventure. This district, part of the Garhwal region, is renowned for its picturesque landscapes, historic temples, and vibrant local culture. Here&rsquo;s a comprehensive guide to exploring the enchanting district of Chamoli:</p>\r\n<h4>1.&nbsp;<strong>Joshimath</strong>:</h4>\r\n<p>Joshimath, also known as Jyotirmath, is a key town in Chamoli, serving as a gateway to several Himalayan adventures.</p>\r\n<ul>\r\n<li><strong>Auli</strong>: Auli, just 16 km from Joshimath, is a renowned skiing destination. With its snow-capped slopes and breathtaking views, it&rsquo;s a must-visit for winter sports enthusiasts. In summer, Auli&rsquo;s lush meadows offer stunning vistas and excellent trekking opportunities.</li>\r\n<li><strong>Narasimha Temple</strong>: This ancient temple dedicated to Lord Vishnu is a significant pilgrimage site and a beautiful example of traditional architecture.</li>\r\n</ul>\r\n<h4>2.&nbsp;<strong>Badrinath</strong>:</h4>\r\n<p>Badrinath is one of the four Char Dham pilgrimage sites and a spiritual center for Hindus.</p>\r\n<ul>\r\n<li><strong>Badrinath Temple</strong>: The temple is dedicated to Lord Vishnu and is one of the most revered pilgrimage destinations in India. Set against the backdrop of the Neelkanth peak, the temple\'s architecture and religious significance make it a focal point of the Char Dham Yatra.</li>\r\n<li><strong>Tapt Kund</strong>: A natural hot spring located near the Badrinath Temple, where pilgrims take a holy dip before visiting the shrine.</li>\r\n</ul>\r\n<h4>3.&nbsp;<strong>Hemkund Sahib</strong>:</h4>\r\n<p>Hemkund Sahib is a revered Sikh pilgrimage site located at an altitude of 4,632 meters.</p>\r\n<ul>\r\n<li><strong>Hemkund Sahib Gurudwara</strong>: This sacred shrine is dedicated to Guru Gobind Singh, the tenth Sikh Guru. The location, surrounded by snow-capped peaks and a pristine lake, offers a serene and spiritually uplifting experience.</li>\r\n<li><strong>Hemkund Lake</strong>: A high-altitude glacial lake near the Gurudwara, it is considered holy and offers stunning reflections of the surrounding peaks.</li>\r\n</ul>\r\n<h4>4.&nbsp;<strong>Valley of Flowers National Park</strong>:</h4>\r\n<p>A UNESCO World Heritage Site, the Valley of Flowers is renowned for its vibrant floral diversity.</p>\r\n<ul>\r\n<li><strong>Floral Wonderland</strong>: The valley blooms with a stunning array of wildflowers during the monsoon season, creating a mesmerizing landscape. The park is home to over 500 species of flowers, including the rare Blue Poppy and the Brahma Kamal.</li>\r\n<li><strong>Trekking Routes</strong>: Accessible via a trek from the village of Ghangaria, the Valley of Flowers offers moderate treks through meadows and forests, culminating in breathtaking views of the floral landscape.</li>\r\n</ul>\r\n<h4>5.&nbsp;<strong>Ghangaria</strong>:</h4>\r\n<p>Ghangaria is a base camp for those heading to the Valley of Flowers and Hemkund Sahib.</p>\r\n<ul>\r\n<li><strong>Ghangaria Village</strong>: This charming village serves as a starting point for treks to the Valley of Flowers and Hemkund Sahib. It provides basic amenities and accommodation for travelers exploring the region.</li>\r\n</ul>\r\n<h4>6.&nbsp;<strong>Kafni Glacier</strong>:</h4>\r\n<p>For the adventure enthusiast, the Kafni Glacier trek offers an exhilarating experience.</p>\r\n<ul>\r\n<li><strong>Trekking Adventure</strong>: The trek to Kafni Glacier, located in the remote Pindar Valley, involves traversing lush forests, charming villages, and challenging terrains. The glacier provides stunning views of the surrounding peaks and a sense of accomplishment for trekkers.</li>\r\n</ul>\r\n<h4>7.&nbsp;<strong>Tungnath</strong>:</h4>\r\n<p>Tungnath, situated in the Chandranath Parvat, is part of the Kedarnath range and holds religious significance.</p>\r\n<ul>\r\n<li><strong>Tungnath Temple</strong>: Dedicated to Lord Shiva, it is one of the highest Shiva temples in the world, located at an altitude of 3,680 meters. The trek to the temple is challenging but offers spectacular views of the Himalayas.</li>\r\n</ul>\r\n<h4>8. <strong>Pindari Glacier</strong>:</h4>\r\n<p>Pindari Glacier, another spectacular trekking destination, offers an opportunity to witness the pristine beauty of the glaciers.</p>\r\n<ul>\r\n<li><strong>Scenic Trek</strong>: The trek to Pindari Glacier is renowned for its breathtaking landscapes, including lush meadows, dense forests, and majestic snow-covered peaks. It&rsquo;s a fantastic option for experienced trekkers seeking solitude and natural beauty.</li>\r\n</ul>\r\n<h4>9. <strong>Badrinath-Kedarnath National Park</strong>:</h4>\r\n<p>This national park encompasses the regions of Badrinath and Kedarnath and is known for its diverse wildlife and stunning landscapes.</p>\r\n<ul>\r\n<li><strong>Wildlife and Scenery</strong>: The park is home to various species of flora and fauna, including the Himalayan Monal and the Musk Deer. It offers a range of trekking options and opportunities for wildlife spotting.</li>\r\n</ul>', 'Gaurav ', '3', '', '', '', '', '1722253771_85696f9b09b33b1ee6dd.jpg', '2024-07-29 17:19:31', '2024-07-29 17:19:31'),
(19, 1, 'Discover the Serene Beauty of Auli Bugyal: Uttarakhand’s High-Altitude Meadow', 'Discover-the-Serene-Beauty-of-Auli-Bugyal:-Uttarakhand’s-High-Altitude-Meadow', '<p>Auli Bugyal, one of Uttarakhand&rsquo;s most picturesque meadows, offers a breathtaking escape into nature. With its sprawling green landscapes set against the backdrop of the majestic Himalayas, Auli Bugyal is a paradise for nature lovers and trekkers alike.</p>', '<p>Nestled at an altitude of over 3,000 meters in the Chamoli district of Uttarakhand, Auli Bugyal is a stunning high-altitude meadow that captivates visitors with its lush greenery and panoramic views of the surrounding Himalayan peaks. Known for its pristine beauty and tranquility, Auli Bugyal is a must-visit destination for those seeking solace in nature. Whether you\'re trekking through its undulating landscapes in the summer or witnessing its transformation into a snow-covered wonderland in the winter, Auli Bugyal promises an unforgettable experience.</p>', 'Gaurav ', '59', '', 'Auli Bugyal: A Scenic Meadow in Uttarakhand’s Himalayas', 'Auli Bugyal, Auli Meadow, Uttarakhand trekking, High-altitude meadows, Auli Bugyal trekking, Places to visit in Uttarakhand, Himalayan meadows, Auli Bugyal travel guide', 'Explore the breathtaking beauty of Auli Bugyal, a high-altitude meadow in Uttarakhand, India. Perfect for trekking and nature lovers, this serene destination offers stunning views of the Himalayas and a peaceful retreat into nature.', '1725282846_ca84c04fdce67413335a.jpg', '2024-09-02 18:44:06', '2024-09-02 18:44:06');

-- --------------------------------------------------------

--
-- Table structure for table `blog_likes`
--

CREATE TABLE `blog_likes` (
  `id` int(11) NOT NULL,
  `user_ip` varchar(252) DEFAULT NULL,
  `blog_id` int(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated-on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_likes`
--

INSERT INTO `blog_likes` (`id`, `user_ip`, `blog_id`, `create_at`, `updated-on`) VALUES
(19, '192.168.30.107', 10, '2024-08-07 11:07:01', '2024-08-07 11:07:01'),
(22, '192.168.30.107', 15, '2024-08-07 11:25:42', '2024-08-07 11:25:42'),
(23, '192.168.30.107', 14, '2024-08-16 13:01:05', '2024-08-16 13:01:05'),
(24, '192.168.30.107', 19, '2024-09-02 13:14:45', '2024-09-02 13:14:45'),
(25, '192.168.30.107', 13, '2024-09-04 12:30:35', '2024-09-04 12:30:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories_blogs`
--

CREATE TABLE `categories_blogs` (
  `id` int(10) NOT NULL,
  `blog_categories` varchar(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories_blogs`
--

INSERT INTO `categories_blogs` (`id`, `blog_categories`) VALUES
(1, 'Adventure Tourism'),
(2, 'Pilgrimage Sites'),
(3, 'Hill Stations'),
(4, 'Wildlife Sanctuaries'),
(5, 'Trekking Routes'),
(6, 'Camping Sites'),
(7, 'Waterfalls'),
(8, 'River Rafting'),
(9, 'National Parks'),
(10, 'Historical Places'),
(11, 'Cultural Heritage'),
(12, 'Fairs and Festivals'),
(13, 'Local Cuisine'),
(14, 'Photography Spots'),
(15, 'Nature Walks'),
(16, 'Eco-Tourism'),
(17, 'Luxury Resorts'),
(18, 'Backpacking Trails'),
(19, 'Travel Tips and Guides'),
(20, 'Local Handicrafts');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `meta_title` text NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `meta_title`, `meta_description`, `meta_keyword`) VALUES
(1, 'Almora', 'Explore Almora - The Cultural Heart of Uttarakhand', 'Almora is known for its rich cultural heritage and breathtaking views of the Himalayas. Discover the best places to visit in Almora, including temples, markets, and scenic spots.', 'Almora, cultural heritage, Himalayas, temples, markets, sightseeing, Uttarakhand'),
(2, 'Bageshwar', 'Bageshwar - Gateway to Kumaon’s Natural Beauty', 'Bageshwar offers a unique blend of natural beauty and spirituality. Explore the top attractions in Bageshwar, from ancient temples to lush green valleys.', 'Bageshwar, Kumaon, natural beauty, temples, valleys, trekking, Uttarakhand'),
(3, 'Chamoli', 'Chamoli - A Land of Pilgrimage and Adventure', 'Chamoli is a paradise for pilgrims and adventure seekers alike. Learn about the sacred sites and thrilling treks that make Chamoli a must-visit destination.', 'Chamoli, pilgrimage, adventure, treks, sacred sites, Uttarakhand'),
(4, 'Champawat', 'Champawat - Discover the Ancient Charm', 'Champawat is steeped in history and legend. Discover the ancient temples, forts, and natural beauty that define this historic region.', 'Champawat, ancient temples, history, forts, nature, Uttarakhand'),
(5, 'Dehradun', 'Dehradun - The Capital of Uttarakhand', 'Dehradun is a vibrant city that blends modern amenities with natural beauty. Explore the best places to visit in Dehradun, from shopping districts to nature parks.', 'Dehradun, capital, shopping, nature parks, modern city, Uttarakhand'),
(6, 'Haridwar', 'Haridwar - The Spiritual Capital of India', 'Haridwar is one of the holiest cities in India, known for its ghats and temples. Learn about the spiritual significance and must-visit places in Haridwar', 'Haridwar, spiritual capital, ghats, temples, pilgrimage, Uttarakhand'),
(7, 'Nainital', 'Nainital - The Lake District of India', 'Nainital is famous for its picturesque lakes and cool climate. Discover the best attractions in Nainital, including boating, shopping, and hiking', 'Nainital, lakes, boating, shopping, hiking, hill station, Uttarakhand'),
(8, 'Pauri Garhwal', 'Pauri Garhwal - Serene Landscapes and Rich Culture', 'Pauri Garhwal offers serene landscapes and a deep cultural heritage. Explore the tranquil villages, temples, and panoramic views in Pauri Garhwal', 'Pauri Garhwal, serene landscapes, culture, temples, villages, Uttarakhand'),
(9, 'Pithoragarh', 'Pithoragarh - The Mini Kashmir of Uttarakhand', 'Pithoragarh is known for its scenic beauty and strategic location. Learn about the attractions and natural wonders that make Pithoragarh a hidden gem.', 'Pithoragarh, mini Kashmir, scenic beauty, strategic location, Uttarakhand'),
(10, 'Rudraprayag', 'Rudraprayag - Confluence of Rivers and Faith', 'Rudraprayag is where rivers and spirituality converge. Discover the spiritual and natural attractions that make Rudraprayag a unique destination.', 'Rudraprayag, river confluence, spirituality, temples, natural beauty, Uttarakhand'),
(11, 'Tehri Garhwal', 'Tehri Garhwal - Where History Meets Nature', 'Tehri Garhwal is known for its historic significance and natural beauty. Explore the old forts, temples, and the famous Tehri Dam.', 'Tehri Garhwal, history, forts, temples, Tehri Dam, nature, Uttarakhand'),
(12, 'Udham Singh Nagar', 'Udham Singh Nagar - The Agricultural Heartland of Uttarakhand', 'Udham Singh Nagar is a hub for agriculture and industry. Learn about the region’s farming heritage and the best places to visit in Udham Singh Nagar', 'Udham Singh Nagar, agriculture, industry, farming heritage, Uttarakhand'),
(13, 'Uttarkashi', 'Uttarkashi - Gateway to the Himalayas', 'Uttarkashi is a haven for trekkers and pilgrims. Explore the mountain trails, temples, and scenic beauty that define Uttarkashi.', 'Uttarkashi, trekking, Himalayas, temples, scenic beauty, Uttarakhand');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(252) DEFAULT NULL,
  `email` varchar(252) DEFAULT NULL,
  `subject` varchar(252) DEFAULT NULL,
  `message` varchar(252) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_on`) VALUES
(7, 'Shea Berg', 'donunip@mailinator.com', 'Tenetur aut enim qui', 'Atque sunt qui ut vo', '2024-08-03', '2024-08-03 15:11:08'),
(8, 'Levi Odonnell', 'xuxok@mailinator.com', 'Occaecat perspiciati', 'Amet labore eu temp', '2024-08-03', '2024-08-03 15:15:16'),
(9, 'Kennedy Brooks', 'sewisubyqa@mailinator.com', 'Enim explicabo Pers', 'Aute sint consectetu', '2024-08-03', '2024-08-03 15:17:44'),
(10, 'Addison Flowers', 'tylysyfaqo@mailinator.com', 'Quis porro non debit', 'Nemo asperiores ut e', '2024-08-06', '2024-08-06 12:10:13'),
(11, 'dfgdgfdgfdgdfg', '', '', '', '2024-08-07', '2024-08-07 17:18:22'),
(12, 'fgdg', 'fdgdfg', 'dfgdfg', 'fgdfgdf', '2024-08-07', '2024-08-07 17:24:22'),
(13, 'golu', 'rwtgaurav40@gmail.com', 'Labore ut veritatis ', 'ghghgfhgfhgfh', '2024-08-08', '2024-08-08 12:17:23'),
(14, 'jhgjhjhg', 'rwtgolu64@gmail.com', 'Eum excepteur rerum ', 'fghfhgfghgh', '2024-08-08', '2024-08-08 12:23:37'),
(15, 'Velma Mcbride', 'xyqufif@mailinator.com', 'Nulla eius non anim ', 'Voluptatibus laboris', '2024-08-08', '2024-08-08 12:28:17'),
(16, 'Hamish Garrison', 'dusalupo@mailinator.com', 'Do laboriosam tempo', 'Nemo sit pariatur C', '2024-08-08', '2024-08-08 12:29:47'),
(17, 'Zenaida Barnett', 'henewyges@mailinator.com', 'Eu eiusmod reiciendi', 'Deserunt deserunt pl', '2024-08-08', '2024-08-08 12:32:36'),
(18, 'Justine Merritt', 'vofefo@mailinator.com', 'Tempora omnis a porr', 'Aut veniam officiis', '2024-08-08', '2024-08-08 12:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `explore_uttarakhand`
--

CREATE TABLE `explore_uttarakhand` (
  `id` int(10) NOT NULL,
  `city_id` int(10) DEFAULT NULL,
  `place` varchar(252) NOT NULL,
  `title` varchar(252) NOT NULL,
  `slug` varchar(252) NOT NULL,
  `about_title` varchar(252) NOT NULL,
  `long_description` longtext DEFAULT NULL,
  `short_description` longtext DEFAULT NULL,
  `meta_title` text NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `all_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `explore_uttarakhand`
--

INSERT INTO `explore_uttarakhand` (`id`, `city_id`, `place`, `title`, `slug`, `about_title`, `long_description`, `short_description`, `meta_title`, `meta_description`, `meta_keyword`, `all_image`) VALUES
(1, 1, 'Kasar Devi Temple', 'Quos reiciendis non ', 'Quos-reiciendis-non-', 'Velit aut autem qui ', '<h3>gfgfgfdgfdgfdgdfgdfgdfgfd</h3>', '', '', '', '', ''),
(2, 1, 'Bagnath Temple', 'Esse architecto mol', 'Esse-architecto-mol', 'Exercitationem culpa', '<p>ikukukuk</p>', '', '', '', '', ''),
(9, 1, 'Katarmal Sun Temple', 'ghf', 'ghf', 'sdsdsdsdsgfdgdfg', '<p>dsdsdsadsadsadsadsadasfgfdgdfgdfgdfgdsadsadsadsad</p>', '', '', '', '', ''),
(10, 1, 'Binsar Wildlife', 'sdffdsf', 'sdffdsf', 'fsdfsdfsdf', '<p>fsdfsdfsdfsdf</p>', '', '', '', '', ''),
(11, 1, 'Bright End', 'dsadsdsadsad', 'dsadsdsadsad', 'sadsadsadsa', '<p>sdsadsadsadsadassd</p>', '', '', '', '', '1718176313_9b32a114cdc0402ed1e5.jpg'),
(23, 8, 'Khirsu', 'beautiful place of uttrakhand', 'beautiful-place-of-uttrakhand', 'so good', '<p>शिखरों के बीच में बसी हुई <span style=\"color: #fbeeb8;\">शांतिपूर्ण </span>खिरसू,<br>जहां प्राकृतिक शांति आसमान को अपने रहस्य सुनाती है।<br>महान पाइन्स धीरे-धीरे पहाड़ी हवा में हिलते हैं,</p>', '', '', '', '', '1718188381_6de94fe6c208b2f00836.jpg'),
(28, 8, 'lansdowne', 'the beautyfull place pauri', 'the-beautyfull-place-pauri', 'गढ़वाल राइफल्स का गढ़', '<p>प्राकृतिक सौंदर्य से भरपूर इस इलाके में देखने लायक काफी कुछ है। प्राकृतिक छटा का आनन्द लेने के लिए टिप इन टॉप जाया जा सकता है। यहाँ से बर्फीली चोटी और मनोरम दृश्य देखा जा सकता है। दूर-दूर तर फैले पर्वत और उनके बीच छोटे-छोटे कई गाँव आसानी से देखे ज', '<p>लैंसडाउन को ब्रिटिश द्वारा वर्ष 1887 में बसाया गया। उस समय के वायसराय ऑफ इंडिया लॉर्ड लैंसडाउन के नाम पर ही इसका नाम रखा गया। वैसे, इसका वास्तविक नाम कालूडांडा है। यह पूरा क्षेत्र सेना के अधीन है और&nbsp;<a title=\"गढ़वाल राइफल्स\" href=\"https://hi.wikip', '', '', '', ''),
(29, 5, 'masoore', 'गढ़वाल राइफल्स का गढ़', 'गढ़वाल-राइफल्स-का-गढ़', 'गढ़वाल राइफल्स का गढ़', '<header class=\"mw-body-header vector-page-titlebar\">\r\n<h1 id=\"firstHeading\" class=\"firstHeading mw-first-heading\"><span class=\"mw-page-title-main\">लैंसडाउन</span></h1>\r\n<div id=\"p-lang-btn\" class=\"vector-dropdown mw-portlet mw-portlet-lang\"><input id=\"p-lang-btn-checkbox\" class=\"vector-dropdown-checkbox mw-interlanguage-selector\" role=\"button\" type=\"checkbox\" aria-haspopup=\"true\" data-event-name=\"ui.dropdown-p-lang-btn\" aria-label=\"दूसरे भाषा में लेख पर जाएँ। 15 भाषाओं में उपलब्ध\"><label id=\"p-lang-btn-label\" class=\"vector-dropdown-label cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--action-progressive mw-portlet-lang-heading-15\" for=\"p-lang-btn-checkbox\" aria-hidden=\"true\"><span class=\"vector-dropdown-label-text\">15 भाषाएँ</span></label></div>\r\n</header>\r\n<div class=\"vector-page-toolbar\">\r\n<div class=\"vector-page-toolbar-container\">\r\n<div id=\"left-navigation\"><nav aria-label=\"नामस्थान\">\r\n<div id=\"p-associated-pages\" class=\"vector-menu vector-menu-tabs mw-portlet mw-portlet-associated-pages\">\r\n<div class=\"vector-menu-content\">\r\n<ul class=\"vector-menu-content-list\">\r\n<li id=\"ca-nstab-main\" class=\"selected vector-tab-noicon mw-list-item\"><a accesskey=\"c\" title=\"सामग्री वाला पृष्ठ देखें [alt-shift-c]\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8\">लेख</a></li>\r\n<li id=\"ca-talk\" class=\"new vector-tab-noicon mw-list-item\"><a accesskey=\"t\" title=\"सामग्री पृष्ठ के बारे में वार्तालाप (पृष्ठ मौजूद नहीं है) [alt-shift-t]\" href=\"https://hi.wikipedia.org/w/index.php?title=%E0%A4%B5%E0%A4%BE%E0%A4%B0%E0%A5%8D%E0%A4%A4%E0%A4%BE:%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8&amp;action=edit&amp;redlink=1\" rel=\"discussion\" aria-invalid=\"true\">संवाद</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</nav></div>\r\n<div id=\"right-navigation\" class=\"vector-collapsible\"><nav aria-label=\"प्रदर्शन\">\r\n<div id=\"p-views\" class=\"vector-menu vector-menu-tabs mw-portlet mw-portlet-views\">\r\n<div class=\"vector-menu-content\">\r\n<ul class=\"vector-menu-content-list\">\r\n<li id=\"ca-view\" class=\"selected vector-tab-noicon mw-list-item\"><a href=\"https://hi.wikipedia.org/wiki/%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8\">पढ़ें</a></li>\r\n<li id=\"ca-edit\" class=\"vector-tab-noicon mw-list-item\"><a accesskey=\"e\" title=\"इस पृष्ठ के स्रोत कोड को संपादित करें [alt-shift-e]\" href=\"https://hi.wikipedia.org/w/index.php?title=%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8&amp;action=edit\">सम्पादित करें</a></li>\r\n<li id=\"ca-history\" class=\"vector-tab-noicon mw-list-item\"><a accesskey=\"h\" title=\"इस पृष्ठ के पुराने अवतरण [alt-shift-h]\" href=\"https://hi.wikipedia.org/w/index.php?title=%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8&amp;action=history\">इतिहास देखें</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</nav><nav class=\"vector-page-tools-landmark\" aria-label=\"पृष्ठ उपकरण\">\r\n<div id=\"vector-page-tools-dropdown\" class=\"vector-dropdown vector-page-tools-dropdown\"><input id=\"vector-page-tools-dropdown-checkbox\" class=\"vector-dropdown-checkbox \" role=\"button\" type=\"checkbox\" aria-haspopup=\"true\" data-event-name=\"ui.dropdown-vector-page-tools-dropdown\" aria-label=\"उपकरण\"><label id=\"vector-page-tools-dropdown-label\" class=\"vector-dropdown-label cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet\" for=\"vector-page-tools-dropdown-checkbox\" aria-hidden=\"true\"><span class=\"vector-dropdown-label-text\">उपकरण</span></label>\r\n<div class=\"vector-dropdown-content\">\r\n<div id=\"vector-page-tools-unpinned-container\" class=\"vector-unpinned-container\">\r\n<div id=\"vector-page-tools\" class=\"vector-page-tools vector-pinnable-element\">\r\n<div class=\"vector-pinnable-header vector-page-tools-pinnable-header vector-pinnable-header-unpinned\" data-feature-name=\"page-tools-pinned\" data-pinnable-element-id=\"vector-page-tools\" data-pinned-container-id=\"vector-page-tools-pinned-container\" data-unpinned-container-id=\"vector-page-tools-unpinned-container\" data-saved-pinned-state=\"false\">\r\n<div class=\"vector-pinnable-header-label\">&nbsp;</div>\r\n<button class=\"vector-pinnable-header-toggle-button vector-pinnable-header-pin-button\" data-event-name=\"pinnable-header.vector-page-tools.pin\"></button></div>\r\n<div id=\"p-tb\" class=\"vector-menu mw-portlet mw-portlet-tb\">\r\n<div class=\"vector-menu-heading\">&nbsp;</div>\r\n<div class=\"vector-menu-content\">\r\n<ul class=\"vector-menu-content-list\">\r\n<li id=\"t-whatlinkshere\" class=\"mw-list-item\"></li>\r\n<li id=\"t-recentchangeslinked\" class=\"mw-list-item\"></li>\r\n<li id=\"t-upload\" class=\"mw-list-item\"></li>\r\n<li id=\"t-specialpages\" class=\"mw-list-item\"></li>\r\n<li id=\"t-permalink\" class=\"mw-list-item\"></li>\r\n<li id=\"t-info\" class=\"mw-list-item\"></li>\r\n<li id=\"t-cite\" class=\"mw-list-item\"></li>\r\n<li id=\"t-urlshortener\" class=\"mw-list-item\"></li>\r\n<li id=\"t-urlshortener-qrcode\" class=\"mw-list-item\"></li>\r\n<li id=\"t-shorturl\" class=\"mw-list-item\"></li>\r\n<li id=\"t-wikibase\" class=\"mw-list-item\"></li>\r\n<li id=\"t-page-size\" class=\"mw-list-item mw-list-item-js\"></li>\r\n<li id=\"wbc-editpage\" class=\"mw-list-item mw-list-item-js\"></li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div id=\"p-coll-print_export\" class=\"vector-menu mw-portlet mw-portlet-coll-print_export\">\r\n<div class=\"vector-menu-heading\">&nbsp;</div>\r\n<div class=\"vector-menu-content\">\r\n<ul class=\"vector-menu-content-list\">\r\n<li id=\"coll-create_a_book\" class=\"mw-list-item\"></li>\r\n<li id=\"coll-download-as-rl\" class=\"mw-list-item\"></li>\r\n<li id=\"t-print\" class=\"mw-list-item\"></li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div id=\"p-wikibase-otherprojects\" class=\"vector-menu mw-portlet mw-portlet-wikibase-otherprojects\">\r\n<div class=\"vector-menu-heading\">&nbsp;</div>\r\n<div class=\"vector-menu-content\">\r\n<ul class=\"vector-menu-content-list\">\r\n<li class=\"wb-otherproject-link wb-otherproject-commons mw-list-item\">&nbsp;</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</nav></div>\r\n</div>\r\n</div>\r\n<div class=\"vector-column-end\">\r\n<div class=\"vector-sticky-pinned-container\">&nbsp;</div>\r\n</div>\r\n<div id=\"bodyContent\" class=\"vector-body ve-init-mw-desktopArticleTarget-targetContainer\" aria-labelledby=\"firstHeading\" data-mw-ve-target-container=\"\">\r\n<div class=\"vector-body-before-content\">\r\n<div class=\"mw-indicators\">&nbsp;</div>\r\n</div>\r\n<div id=\"contentSub\">\r\n<div id=\"mw-content-subtitle\"></div>\r\n</div>\r\n<div id=\"mw-content-text\" class=\"mw-body-content\">\r\n<div class=\"mw-content-ltr mw-parser-output\" dir=\"ltr\" lang=\"hi\">\r\n<table class=\"infobox geography vcard\">\r\n<tbody>\r\n<tr>\r\n<th class=\"infobox-above\" colspan=\"2\"><span class=\"fn org\">लैंसडाउन</span><br><span class=\"nickname\">Lansdowne</span></th>\r\n</tr>\r\n<tr>\r\n<td class=\"infobox-subheader\" colspan=\"2\"><span class=\"category\">{{{type}}}</span></td>\r\n</tr>\r\n<tr class=\"mergedtoprow\">\r\n<td class=\"infobox-full-data\" colspan=\"2\"><a class=\"mw-file-description\" title=\"लैंसडाउन का दृश्य\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%9A%E0%A4%BF%E0%A4%A4%E0%A5%8D%E0%A4%B0:Lansdowne_Landscape.jpg\"><img class=\"mw-file-element\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Lansdowne_Landscape.jpg/250px-Lansdowne_Landscape.jpg\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Lansdowne_Landscape.jpg/375px-Lansdowne_Landscape.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Lansdowne_Landscape.jpg/500px-Lansdowne_Landscape.jpg 2x\" alt=\"लैंसडाउन का दृश्य\" width=\"250\" height=\"167\" data-file-width=\"6000\" data-file-height=\"4000\"></a>\r\n<div>लैंसडाउन का दृश्य</div>\r\n</td>\r\n</tr>\r\n<tr class=\"mergedtoprow\">\r\n<td class=\"infobox-full-data maptable\" colspan=\"2\">&nbsp;</td>\r\n</tr>\r\n<tr class=\"mergedtoprow\">\r\n<td class=\"infobox-full-data\" colspan=\"2\">\r\n<div class=\"center\">\r\n<div class=\"locmap\">\r\n<div>\r\n<div><a class=\"mw-file-description\" title=\"लैंसडाउन is located in उत्तराखंड\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%9A%E0%A4%BF%E0%A4%A4%E0%A5%8D%E0%A4%B0:India_Uttarakhand_location_map.svg\"><img class=\"mw-file-element\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/India_Uttarakhand_location_map.svg/250px-India_Uttarakhand_location_map.svg.png\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/India_Uttarakhand_location_map.svg/375px-India_Uttarakhand_location_map.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f6/India_Uttarakhand_location_map.svg/500px-India_Uttarakhand_location_map.svg.png 2x\" alt=\"लैंसडाउन is located in उत्तराखंड\" width=\"250\" height=\"208\" data-file-width=\"957\" data-file-height=\"795\"></a>\r\n<div class=\"od\">\r\n<div class=\"id\"><span title=\"लैंसडाउन\"><img class=\"mw-file-element\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Red_pog.svg/6px-Red_pog.svg.png\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Red_pog.svg/9px-Red_pog.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Red_pog.svg/12px-Red_pog.svg.png 2x\" alt=\"लैंसडाउन\" width=\"6\" height=\"6\" data-file-width=\"64\" data-file-height=\"64\"></span></div>\r\n<div class=\"pr\">\r\n<div>लैंसडाउन</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div><small>उत्तराखण्ड में स्थिति</small></div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n</tr>\r\n<tr class=\"mergedbottomrow\">\r\n<td class=\"infobox-full-data\" colspan=\"2\">निर्देशांक:&nbsp;<span class=\"plainlinks nourlexpansion\"><img class=\"wmamapbutton noprint\" title=\"सक्रिय नक्शे पर लोकेशन या स्थान दिखायें\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/WMA_button2b.png/17px-WMA_button2b.png\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/5/55/WMA_button2b.png/17px-WMA_button2b.png 1x, //upload.wikimedia.org/wikipedia/commons/thumb/5/55/WMA_button2b.png/34px-WMA_button2b.png 2x\" alt=\"\"><a class=\"external text\" href=\"https://tools.wmflabs.org/geohack/geohack.php?pagename=%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8&amp;params=29.73_N_78.53_E_type:city(5667)_region:\"><span class=\"geo-default\"><span class=\"geo-dec\" title=\"इस जगह के लिए मानचित्र, हवाई छायाचित्र एवं अन्य आँकड़े\">29.73&deg;N 78.53&deg;E</span></span></a></span><span id=\"coordinates\"><a class=\"mw-redirect\" title=\"भौगोलिक निर्देशांक प्रणाली\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%AD%E0%A5%8C%E0%A4%97%E0%A5%8B%E0%A4%B2%E0%A4%BF%E0%A4%95_%E0%A4%A8%E0%A4%BF%E0%A4%B0%E0%A5%8D%E0%A4%A6%E0%A5%87%E0%A4%B6%E0%A4%BE%E0%A4%82%E0%A4%95_%E0%A4%AA%E0%A5%8D%E0%A4%B0%E0%A4%A3%E0%A4%BE%E0%A4%B2%E0%A5%80\">निर्देशांक</a>:&nbsp;<span class=\"plainlinks nourlexpansion\"><img class=\"wmamapbutton noprint\" title=\"सक्रिय नक्शे पर लोकेशन या स्थान दिखायें\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/WMA_button2b.png/17px-WMA_button2b.png\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/5/55/WMA_button2b.png/17px-WMA_button2b.png 1x, //upload.wikimedia.org/wikipedia/commons/thumb/5/55/WMA_button2b.png/34px-WMA_button2b.png 2x\" alt=\"\"><a class=\"external text\" href=\"https://tools.wmflabs.org/geohack/geohack.php?pagename=%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8&amp;params=29.73_N_78.53_E_type:city(5667)_region:\"><span class=\"geo-default\"><span class=\"geo-dec\" title=\"इस जगह के लिए मानचित्र, हवाई छायाचित्र एवं अन्य आँकड़े\">29.73&deg;N 78.53&deg;E</span></span></a></span></span></td>\r\n</tr>\r\n<tr class=\"mergedtoprow\">\r\n<th class=\"infobox-label\" scope=\"row\">देश</th>\r\n<td class=\"infobox-data\"><span class=\"flagicon\"><span class=\"mw-image-border\"><img class=\"mw-file-element\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Flag_of_India.svg/23px-Flag_of_India.svg.png\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/4/41/Flag_of_India.svg/35px-Flag_of_India.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/41/Flag_of_India.svg/45px-Flag_of_India.svg.png 2x\" alt=\"\" width=\"23\" height=\"15\" data-file-width=\"900\" data-file-height=\"600\"></span>&nbsp;</span><a title=\"भारत\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%AD%E0%A4%BE%E0%A4%B0%E0%A4%A4\">भारत</a></td>\r\n</tr>\r\n<tr class=\"mergedrow\">\r\n<th class=\"infobox-label\" scope=\"row\"><a title=\"भारत के राज्य तथा केन्द्र-शासित प्रदेश\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%AD%E0%A4%BE%E0%A4%B0%E0%A4%A4_%E0%A4%95%E0%A5%87_%E0%A4%B0%E0%A4%BE%E0%A4%9C%E0%A5%8D%E0%A4%AF_%E0%A4%A4%E0%A4%A5%E0%A4%BE_%E0%A4%95%E0%A5%87%E0%A4%A8%E0%A5%8D%E0%A4%A6%E0%A5%8D%E0%A4%B0-%E0%A4%B6%E0%A4%BE%E0%A4%B8%E0%A4%BF%E0%A4%A4_%E0%A4%AA%E0%A5%8D%E0%A4%B0%E0%A4%A6%E0%A5%87%E0%A4%B6\">प्रान्त</a></th>\r\n<td class=\"infobox-data\"><a title=\"उत्तराखण्ड\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%89%E0%A4%A4%E0%A5%8D%E0%A4%A4%E0%A4%B0%E0%A4%BE%E0%A4%96%E0%A4%A3%E0%A5%8D%E0%A4%A1\">उत्तराखण्ड</a></td>\r\n</tr>\r\n<tr class=\"mergedrow\">\r\n<th class=\"infobox-label\" scope=\"row\"><a title=\"भारत के ज़िले\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%AD%E0%A4%BE%E0%A4%B0%E0%A4%A4_%E0%A4%95%E0%A5%87_%E0%A4%9C%E0%A4%BC%E0%A4%BF%E0%A4%B2%E0%A5%87\">ज़िला</a></th>\r\n<td class=\"infobox-data\"><a class=\"mw-redirect\" title=\"पौड़ी गढ़वाल ज़िला\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%AA%E0%A5%8C%E0%A4%A1%E0%A4%BC%E0%A5%80_%E0%A4%97%E0%A4%A2%E0%A4%BC%E0%A4%B5%E0%A4%BE%E0%A4%B2_%E0%A4%9C%E0%A4%BC%E0%A4%BF%E0%A4%B2%E0%A4%BE\">पौड़ी गढ़वाल ज़िला</a></td>\r\n</tr>\r\n<tr class=\"mergedtoprow\">\r\n<th class=\"infobox-label\" scope=\"row\">स्थापित</th>\r\n<td class=\"infobox-data\">1887</td>\r\n</tr>\r\n<tr class=\"mergedtoprow\">\r\n<th class=\"infobox-label\" scope=\"row\">क्षेत्र</th>\r\n<td class=\"infobox-data\">6.09&nbsp;किमी<sup>2</sup>&nbsp;(2.35&nbsp;वर्गमील)</td>\r\n</tr>\r\n<tr class=\"mergedtoprow\">\r\n<th class=\"infobox-label\" scope=\"row\">ऊँचाई</th>\r\n<td class=\"infobox-data\">1700&nbsp;मी (5,600&nbsp;फीट)</td>\r\n</tr>\r\n<tr class=\"mergedtoprow\">\r\n<th class=\"infobox-header\" colspan=\"2\">जनसंख्या&nbsp;(2011)</th>\r\n</tr>\r\n<tr class=\"mergedrow\">\r\n<th class=\"infobox-label\" scope=\"row\">&nbsp;&bull;&nbsp;कुल</th>\r\n<td class=\"infobox-data\">5,667</td>\r\n</tr>\r\n<tr class=\"mergedtoprow\">\r\n<th class=\"infobox-header\" colspan=\"2\">भाषा</th>\r\n</tr>\r\n<tr class=\"mergedrow\">\r\n<th class=\"infobox-label\" scope=\"row\">&nbsp;&bull;&nbsp;प्रचलित</th>\r\n<td class=\"infobox-data\"><a title=\"हिन्दी\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%B9%E0%A4%BF%E0%A4%A8%E0%A5%8D%E0%A4%A6%E0%A5%80\">हिन्दी</a>,&nbsp;<a title=\"गढ़वाली भाषा\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%97%E0%A4%A2%E0%A4%BC%E0%A4%B5%E0%A4%BE%E0%A4%B2%E0%A5%80_%E0%A4%AD%E0%A4%BE%E0%A4%B7%E0%A4%BE\">गढ़वाली</a></td>\r\n</tr>\r\n<tr class=\"mergedtoprow\">\r\n<th class=\"infobox-label\" scope=\"row\"><a class=\"mw-redirect\" title=\"Time zone\" href=\"https://hi.wikipedia.org/wiki/Time_zone\">समय मण्डल</a></th>\r\n<td class=\"infobox-data\"><a title=\"भारतीय मानक समय\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%AD%E0%A4%BE%E0%A4%B0%E0%A4%A4%E0%A5%80%E0%A4%AF_%E0%A4%AE%E0%A4%BE%E0%A4%A8%E0%A4%95_%E0%A4%B8%E0%A4%AE%E0%A4%AF\">भारतीय मानक समय</a>&nbsp;(<a class=\"mw-redirect\" title=\"यूटीसी+5:30\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%AF%E0%A5%82%E0%A4%9F%E0%A5%80%E0%A4%B8%E0%A5%80%2B5:30\">यूटीसी+5:30</a>)</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<figure><a class=\"mw-file-description\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%9A%E0%A4%BF%E0%A4%A4%E0%A5%8D%E0%A4%B0:Bhullar_Lake.JPG\"><img class=\"mw-file-element\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Bhullar_Lake.JPG/280px-Bhullar_Lake.JPG\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/5/51/Bhullar_Lake.JPG/420px-Bhullar_Lake.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/51/Bhullar_Lake.JPG/560px-Bhullar_Lake.JPG 2x\" width=\"280\" height=\"210\" data-file-width=\"1000\" data-file-height=\"750\"></a>\r\n<figcaption>भुलताल झील</figcaption>\r\n</figure>\r\n<figure><a class=\"mw-file-description\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%9A%E0%A4%BF%E0%A4%A4%E0%A5%8D%E0%A4%B0:Churchsnow.JPG\"><img class=\"mw-file-element\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/Churchsnow.JPG/280px-Churchsnow.JPG\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/6/68/Churchsnow.JPG/420px-Churchsnow.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/68/Churchsnow.JPG/560px-Churchsnow.JPG 2x\" width=\"280\" height=\"210\" data-file-width=\"3072\" data-file-height=\"2304\"></a>\r\n<figcaption>बर्फबारी के दौरान सेंट मैरीज़ गिरिजाघर</figcaption>\r\n</figure>\r\n<figure><a class=\"mw-file-description\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%9A%E0%A4%BF%E0%A4%A4%E0%A5%8D%E0%A4%B0:Lansdownesnow2.JPG\"><img class=\"mw-file-element\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Lansdownesnow2.JPG/280px-Lansdownesnow2.JPG\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Lansdownesnow2.JPG/420px-Lansdownesnow2.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Lansdownesnow2.JPG/560px-Lansdownesnow2.JPG 2x\" width=\"280\" height=\"373\" data-file-width=\"3456\" data-file-height=\"4608\"></a>\r\n<figcaption>भारी बर्फबारी के बाद टिप इन टॉप से नज़ारा</figcaption>\r\n</figure>\r\n<p><strong>लैंसडाउन</strong>&nbsp;(Lansdowne)&nbsp;<a title=\"भारत\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%AD%E0%A4%BE%E0%A4%B0%E0%A4%A4\">भारत</a>&nbsp;के&nbsp;<a title=\"उत्तराखण्ड\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%89%E0%A4%A4%E0%A5%8D%E0%A4%A4%E0%A4%B0%E0%A4%BE%E0%A4%96%E0%A4%A3%E0%A5%8D%E0%A4%A1\">उत्तराखण्ड</a>&nbsp;राज्य के&nbsp;<a class=\"mw-redirect\" title=\"पौड़ी गढ़वाल ज़िले\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%AA%E0%A5%8C%E0%A4%A1%E0%A4%BC%E0%A5%80_%E0%A4%97%E0%A4%A2%E0%A4%BC%E0%A4%B5%E0%A4%BE%E0%A4%B2_%E0%A4%9C%E0%A4%BC%E0%A4%BF%E0%A4%B2%E0%A5%87\">पौड़ी गढ़वाल ज़िले</a>&nbsp;में स्थित एक&nbsp;<a title=\"छावनी\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%9B%E0%A4%BE%E0%A4%B5%E0%A4%A8%E0%A5%80\">छावनी</a>&nbsp;नगर है।<sup id=\"cite_ref-1\" class=\"reference\"><a href=\"https://hi.wikipedia.org/wiki/%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8#cite_note-1\">[1]</a></sup><sup id=\"cite_ref-2\" class=\"reference\"><a href=\"https://hi.wikipedia.org/wiki/%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8#cite_note-2\">[2]</a></sup><sup id=\"cite_ref-3\" class=\"reference\"><a href=\"https://hi.wikipedia.org/wiki/%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8#cite_note-3\">[3]</a></sup></p>\r\n<h2><span id=\".E0.A4.B5.E0.A4.BF.E0.A4.B5.E0.A4.B0.E0.A4.A3\"></span><span id=\"विवरण\" class=\"mw-headline\">विवरण</span><span class=\"mw-editsection\"><span class=\"mw-editsection-bracket\">[</span><a title=\"अनुभाग सम्पादित करें: विवरण\" href=\"https://hi.wikipedia.org/w/index.php?title=%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8&amp;action=edit&amp;section=1\">संपादित करें</a><span class=\"mw-editsection-bracket\">]</span></span></h2>\r\n<p>लैंसडाउन पहाड़ी क्षेत्र में के हरे-भरे प्राकृतिक वातावरण में स्थित है और इसे सन् 1887 में&nbsp;<a title=\"ब्रिटिश राज\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%AC%E0%A5%8D%E0%A4%B0%E0%A4%BF%E0%A4%9F%E0%A4%BF%E0%A4%B6_%E0%A4%B0%E0%A4%BE%E0%A4%9C\">ब्रिटिश काल</a>&nbsp;में बसाया गया। इस स्थान का मूल नाम कालूडाण्डा था, जिसका&nbsp;<a title=\"गढ़वाली भाषा\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%97%E0%A4%A2%E0%A4%BC%E0%A4%B5%E0%A4%BE%E0%A4%B2%E0%A5%80_%E0%A4%AD%E0%A4%BE%E0%A4%B7%E0%A4%BE\">गढ़वाली भाषा</a>&nbsp;में अर्थ \"काले पहाड़\" है। समुद्र तल से इसकी ऊँचाई 1706 मीटर है।&nbsp;<a title=\"दिल्ली\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%A6%E0%A4%BF%E0%A4%B2%E0%A5%8D%E0%A4%B2%E0%A5%80\">दिल्ली</a>&nbsp;से यह&nbsp;<a title=\"पर्वतीय पर्यटन स्थल\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%AA%E0%A4%B0%E0%A5%8D%E0%A4%B5%E0%A4%A4%E0%A5%80%E0%A4%AF_%E0%A4%AA%E0%A4%B0%E0%A5%8D%E0%A4%AF%E0%A4%9F%E0%A4%A8_%E0%A4%B8%E0%A5%8D%E0%A4%A5%E0%A4%B2\">हिल स्टेशन</a>&nbsp;काफी नजदीक है और 5-6 घंटे में लैंसडाउन पहुँचा जा सकता है। बाइक से लैंसडाउन जाने के लिए आनंद विहार के रास्ते दिल्ली से&nbsp;<a title=\"उत्तर प्रदेश\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%89%E0%A4%A4%E0%A5%8D%E0%A4%A4%E0%A4%B0_%E0%A4%AA%E0%A5%8D%E0%A4%B0%E0%A4%A6%E0%A5%87%E0%A4%B6\">उत्तर प्रदेश</a>&nbsp;में प्रवेश करने के बाद&nbsp;<a title=\"मेरठ\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%AE%E0%A5%87%E0%A4%B0%E0%A4%A0\">मेरठ</a>,&nbsp;<a title=\"बिजनौर\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%AC%E0%A4%BF%E0%A4%9C%E0%A4%A8%E0%A5%8C%E0%A4%B0\">बिजनौर</a>&nbsp;और&nbsp;<a title=\"कोटद्वार\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%95%E0%A5%8B%E0%A4%9F%E0%A4%A6%E0%A5%8D%E0%A4%B5%E0%A4%BE%E0%A4%B0\">कोटद्वार</a>&nbsp;होते हुए लैंसडाउन पहुँच सकते हैं।</p>\r\n<h2><span id=\".E0.A4.97.E0.A4.A2.E0.A4.BC.E0.A4.B5.E0.A4.BE.E0.A4.B2_.E0.A4.B0.E0.A4.BE.E0.A4.87.E0.A4.AB.E0.A4.B2.E0.A5.8D.E0.A4.B8_.E0.A4.95.E0.A4.BE_.E0.A4.97.E0.A4.A2.E0.A4.BC\"></span><span id=\"गढ़वाल_राइफल्स_का_गढ़\" class=\"mw-headline\">गढ़वाल राइफल्स का गढ़</span><span class=\"mw-editsection\"><span class=\"mw-editsection-bracket\">[</span><a title=\"अनुभाग सम्पादित करें: गढ़वाल राइफल्स का गढ़\" href=\"https://hi.wikipedia.org/w/index.php?title=%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8&amp;action=edit&amp;section=2\">संपादित करें</a><span class=\"mw-editsection-bracket\">]</span></span></h2>\r\n<p>लैंसडाउन को ब्रिटिश द्वारा वर्ष 1887 में बसाया गया। उस समय के वायसराय ऑफ इंडिया लॉर्ड लैंसडाउन के नाम पर ही इसका नाम रखा गया। वैसे, इसका वास्तविक नाम कालूडांडा है। यह पूरा क्षेत्र सेना के अधीन है और&nbsp;<a title=\"गढ़वाल राइफल्स\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%97%E0%A4%A2%E0%A4%BC%E0%A4%B5%E0%A4%BE%E0%A4%B2_%E0%A4%B0%E0%A4%BE%E0%A4%87%E0%A4%AB%E0%A4%B2%E0%A5%8D%E0%A4%B8\">गढ़वाल राइफल्स</a>&nbsp;का गढ़ भी है। आप यहाँ गढ़वाल राइफल्स वॉर मेमोरियल और रेजिमेंट म्यूजियम देख सकते हैं। यहाँ गढ़वाल राइफल्स से जुड़ी चीजों की झलक पा सकते हैं। संग्रहालय शाम के 5 बजे तक ही खुला रहता है। इसके करीब ही परेड ग्राउंड भी है, जिसे आम पर्यटक बाहर से ही देख सकते हैं। वैसे, यह स्थान स्वतंत्रता आन्दोलन की कई गतिविधियों का गवाह भी रह चुका है।<sup id=\"cite_ref-4\" class=\"reference\"><a title=\"\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8#cite_note-4\">[4]</a></sup></p>\r\n<h2><span id=\".E0.A4.AA.E0.A4.B0.E0.A5.8D.E0.A4.AF.E0.A4.9F.E0.A4.A8_.E0.A4.B8.E0.A5.8D.E0.A4.A5.E0.A4.B2\"></span><span id=\"पर्यटन_स्थल\" class=\"mw-headline\">पर्यटन स्थल</span><span class=\"mw-editsection\"><span class=\"mw-editsection-bracket\">[</span><a title=\"अनुभाग सम्पादित करें: पर्यटन स्थल\" href=\"https://hi.wikipedia.org/w/index.php?title=%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8&amp;action=edit&amp;section=3\">संपादित करें</a><span class=\"mw-editsection-bracket\">]</span></span></h2>\r\n<p>प्राकृतिक सौंदर्य से भरपूर इस इलाके में देखने लायक काफी कुछ है। प्राकृतिक छटा का आनन्द लेने के लिए टिप इन टॉप जाया जा सकता है। यहाँ से बर्फीली चोटी और मनोरम दृश्य देखा जा सकता है। दूर-दूर तर फैले पर्वत और उनके बीच छोटे-छोटे कई गाँव आसानी से देखे जा सकते हैं। इनके पीछे से उगते सूरज का नजारा अद्भुत प्रतीत होता है। साफ मौसम में तो बर्फ से ढँके पहाड़ों की लम्बी श्रृंखला दिखती हैं। पास में ही 100 साल से ज्यादा पुराना सेंट मैरीज़ चर्च भी है। यहाँ की भुल्ला ताल बहुत प्रसिद्ध है। यह एक छोटी-सी झील है जहाँ नौकायन की सुविधाएँ उपलब्ध हैं। शाम को सूर्यास्त का खूबसूरत नजारा संतोषी माता मंदिर से दिखता है। यह मंदिर लैंसडाउन की ऊँची पहाड़ी पर बना हुआ है। वैसे, यहाँ से कुछ किलोमीटर की दूरी पर ताड़केश्वर मंदिर भी है। यह भगवान&nbsp;<a title=\"शिव\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%B6%E0%A4%BF%E0%A4%B5\">शिव</a>&nbsp;का प्राचीन मंदिर है। इसे&nbsp;<a class=\"new\" title=\"सिद्ध पीठ (पृष्ठ मौजूद नहीं है)\" href=\"https://hi.wikipedia.org/w/index.php?title=%E0%A4%B8%E0%A4%BF%E0%A4%A6%E0%A5%8D%E0%A4%A7_%E0%A4%AA%E0%A5%80%E0%A4%A0&amp;action=edit&amp;redlink=1\">सिद्ध पीठ</a>&nbsp;भी माना जाता है। यह पहाड़ पर 2092 मीटर की ऊँचाई पर स्थित है। पूरा मंदिर ताड़ और&nbsp;<a title=\"देवदार\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%A6%E0%A5%87%E0%A4%B5%E0%A4%A6%E0%A4%BE%E0%A4%B0\">देवदार</a>&nbsp;के वृक्षों से घिरा है। यह पूरा इलाका खूबसूरत होने के साथ-साथ शान्त भी है। सैलानी यहाँ पहाड़ चढ़ने, बाइकिंग, सायकलिंग जैसे साहसी खेलों के लिए भी आते हैं।</p>\r\n<h2><span id=\".E0.A4.95.E0.A5.88.E0.A4.B8.E0.A5.87_.E0.A4.AA.E0.A4.B9.E0.A5.81.E0.A4.81.E0.A4.9A.E0.A5.87\"></span><span id=\"कैसे_पहुँचे\" class=\"mw-headline\">कैसे पहुँचे</span><span class=\"mw-editsection\"><span class=\"mw-editsection-bracket\">[</span><a title=\"अनुभाग सम्पादित करें: कैसे पहुँचे\" href=\"https://hi.wikipedia.org/w/index.php?title=%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8&amp;action=edit&amp;section=4\">संपादित करें</a><span class=\"mw-editsection-bracket\">]</span></span></h2>\r\n<p>भारत की राजधानी&nbsp;<a title=\"दिल्ली\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%A6%E0%A4%BF%E0%A4%B2%E0%A5%8D%E0%A4%B2%E0%A5%80\">दिल्ली</a>&nbsp;से लैंसडाउन करीब 270 कि॰मी॰ की दूरी पर है। यहाँ विभिन्न मार्गों से पहुँचा जा सकता है।</p>\r\n<ul>\r\n<li>सड़क मार्ग से लैंसडाउन आसानी से पहुँचा जा सकता है। यह कई शहरों से जुड़ा हुआ है। निजी और सरकारी बसें कोटद्वार तक जाती हैं, जहाँ से लैंसडाउन करीब 40 कि॰मी॰ की दूरी पर है।</li>\r\n<li>रेलवे: नजदीकी रेलवे स्टेशन कोटद्वार स्टेशन है। वहाँ से फिर टैक्सी या सरकारी बस आदि से लैंसडाउन पहुँचा जा सकता है।</li>\r\n<li>हवाई अड्डा: नजदीकी हवाई अड्डा यहाँ का सबसे नजदीकी हवाई अड्डा&nbsp;<a class=\"mw-redirect\" title=\"देहरादून विमानक्षेत्र\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%A6%E0%A5%87%E0%A4%B9%E0%A4%B0%E0%A4%BE%E0%A4%A6%E0%A5%82%E0%A4%A8_%E0%A4%B5%E0%A4%BF%E0%A4%AE%E0%A4%BE%E0%A4%A8%E0%A4%95%E0%A5%8D%E0%A4%B7%E0%A5%87%E0%A4%A4%E0%A5%8D%E0%A4%B0\">जौलीग्राँट एयरपोर्ट</a>&nbsp;है, जो लैंसडाउन से करीब 152 कि॰मी॰ की दूरी पर है।</li>\r\n</ul>\r\n<h2><span id=\".E0.A4.9C.E0.A4.A8.E0.A4.B8.E0.A4.BE.E0.A4.82.E0.A4.96.E0.A5.8D.E0.A4.AF.E0.A4.BF.E0.A4.95.E0.A5.80.E0.A4.AF\"></span><span id=\"जनसांख्यिकीय\" class=\"mw-headline\">जनसांख्यिकीय</span><span class=\"mw-editsection\"><span class=\"mw-editsection-bracket\">[</span><a title=\"अनुभाग सम्पादित करें: जनसांख्यिकीय\" href=\"https://hi.wikipedia.org/w/index.php?title=%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8&amp;action=edit&amp;section=5\">संपादित करें</a><span class=\"mw-editsection-bracket\">]</span></span></h2>\r\n<p>2001 के अनुसार&nbsp;&nbsp;भारत की जनगणना, के अनुसार लैंसडाउन की जनसंख्या 7902 थी। पुरुष 64% और महिलाएँ 36% थीं। लैंसडाउन में औसत साक्षरता 86% है जो कि राष्ट्रीय औसत से अधिक है। पुरुषों की साक्षरता 91% व महिलाओं की 79% है। लैंसडाउन में 9% जनसंख्या 6 वर्ष से कम उम्र के बच्चों की है।<sup id=\"cite_ref-5\" class=\"reference\"><a href=\"https://hi.wikipedia.org/wiki/%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8#cite_note-5\">[5]</a></sup></p>\r\n<h2><span id=\".E0.A4.87.E0.A4.A8.E0.A5.8D.E0.A4.B9.E0.A5.87.E0.A4.82_.E0.A4.AD.E0.A5.80_.E0.A4.A6.E0.A5.87.E0.A4.96.E0.A5.87.E0.A4.82\"></span><span id=\"इन्हें_भी_देखें\" class=\"mw-headline\">इन्हें भी देखें</span><span class=\"mw-editsection\"><span class=\"mw-editsection-bracket\">[</span><a title=\"अनुभाग सम्पादित करें: इन्हें भी देखें\" href=\"https://hi.wikipedia.org/w/index.php?title=%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8&amp;action=edit&amp;section=6\">संपादित करें</a><span class=\"mw-editsection-bracket\">]</span></span></h2>\r\n<ul>\r\n<li><a title=\"गढ़वाल राइफल्स\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%97%E0%A4%A2%E0%A4%BC%E0%A4%B5%E0%A4%BE%E0%A4%B2_%E0%A4%B0%E0%A4%BE%E0%A4%87%E0%A4%AB%E0%A4%B2%E0%A5%8D%E0%A4%B8\">गढ़वाल राइफल्स</a></li>\r\n<li><a title=\"ऋषिकेश\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%8B%E0%A4%B7%E0%A4%BF%E0%A4%95%E0%A5%87%E0%A4%B6\">ऋषिकेश</a></li>\r\n<li><a title=\"नैनीताल\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%A8%E0%A5%88%E0%A4%A8%E0%A5%80%E0%A4%A4%E0%A4%BE%E0%A4%B2\">नैनीताल</a></li>\r\n<li><a title=\"मसूरी\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%AE%E0%A4%B8%E0%A5%82%E0%A4%B0%E0%A5%80\">मसूरी</a></li>\r\n<li><a class=\"mw-redirect\" title=\"पौड़ी गढ़वाल ज़िला\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%AA%E0%A5%8C%E0%A4%A1%E0%A4%BC%E0%A5%80_%E0%A4%97%E0%A4%A2%E0%A4%BC%E0%A4%B5%E0%A4%BE%E0%A4%B2_%E0%A4%9C%E0%A4%BC%E0%A4%BF%E0%A4%B2%E0%A4%BE\">पौड़ी गढ़वाल ज़िला</a></li>\r\n</ul>\r\n<h2><span id=\".E0.A4.AC.E0.A4.BE.E0.A4.B9.E0.A4.B0.E0.A5.80_.E0.A4.95.E0.A4.A1.E0.A4.BC.E0.A4.BF.E0.A4.AF.E0.A4.BE.E0.A4.81\"></span><span id=\"बाहरी_कड़ियाँ\" class=\"mw-headline\">बाहरी कड़ियाँ</span><span class=\"mw-editsection\"><span class=\"mw-editsection-bracket\">[</span><a title=\"अनुभाग सम्पादित करें: बाहरी कड़ियाँ\" href=\"https://hi.wikipedia.org/w/index.php?title=%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8&amp;action=edit&amp;section=7\">संपादित करें</a><span class=\"mw-editsection-bracket\">]</span></span></h2>\r\n<ul>\r\n<li><a class=\"external text\" href=\"https://web.archive.org/web/20110902043745/http://www.thenews24x7.com/specials/travel/9610-2011-05-29-08-12-14\" rel=\"nofollow\" aria-invalid=\"true\">सौंदर्य सुसज्जित लैंसडाउन (यात्रा वृत्तांत)</a></li>\r\n<li><a class=\"external text\" href=\"https://web.archive.org/web/20110120145751/http://in.jagran.yahoo.com/news/travel/general/16_36_471.html\" rel=\"nofollow\" aria-invalid=\"true\">लैंसडाउन छांव भी छतनार भी</a></li>\r\n<li><a class=\"external text\" href=\"https://web.archive.org/web/20160120165627/http://www.lansdownecb.org.in/hi/\" rel=\"nofollow\" aria-invalid=\"true\">छावनी परिषद लैंसडौन, वेबसाइट</a></li>\r\n</ul>\r\n<h2><span id=\".E0.A4.B8.E0.A4.A8.E0.A5.8D.E0.A4.A6.E0.A4.B0.E0.A5.8D.E0.A4.AD\"></span><span id=\"सन्दर्भ\" class=\"mw-headline\">सन्दर्भ</span><span class=\"mw-editsection\"><span class=\"mw-editsection-bracket\">[</span><a title=\"अनुभाग सम्पादित करें: सन्दर्भ\" href=\"https://hi.wikipedia.org/w/index.php?title=%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8&amp;action=edit&amp;section=8\">संपादित करें</a><span class=\"mw-editsection-bracket\">]</span></span></h2>\r\n<div class=\"reflist\">\r\n<ol class=\"references\">\r\n<li id=\"cite_note-1\"><span class=\"mw-cite-backlink\"><a title=\"ऊपर जायें\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8#cite_ref-1\" aria-label=\"ऊपर जायें\">&uarr;</a></span>&nbsp;<span class=\"reference-text\"><cite class=\"citation web\"><a class=\"external text\" href=\"http://morth.nic.in/writereaddata/sublink2images/NH_StartEnding_Station8634854396.htm\" rel=\"nofollow\">\"Start and end points of National Highways\"</a>. मूल से 22 September 2008 को&nbsp;<a class=\"external text\" href=\"https://web.archive.org/web/20080922011802/http://morth.nic.in/writereaddata/sublink2images/NH_StartEnding_Station8634854396.htm\" rel=\"nofollow\" aria-invalid=\"true\">पुरालेखित</a><span class=\"reference-accessdate\">. अभिगमन तिथि&nbsp;<span class=\"nowrap\">23 April</span>&nbsp;2009</span>.</cite></span></li>\r\n<li id=\"cite_note-2\"><span class=\"mw-cite-backlink\"><a title=\"ऊपर जायें\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8#cite_ref-2\" aria-label=\"ऊपर जायें\">&uarr;</a></span>&nbsp;<span class=\"reference-text\">\"<a class=\"external text\" href=\"https://www.google.com/books/edition/Uttarakhand/qsNMI1Hi174C\" rel=\"nofollow\">Uttarakhand: Land and People</a>,\" Sharad Singh Negi, MD Publications, 1995</span></li>\r\n<li id=\"cite_note-3\"><span class=\"mw-cite-backlink\"><a title=\"ऊपर जायें\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8#cite_ref-3\" aria-label=\"ऊपर जायें\">&uarr;</a></span>&nbsp;<span class=\"reference-text\">\"<a class=\"external text\" href=\"https://www.google.com/books/edition/Development_of_Uttarakhand/paRD3jrNfOoC\" rel=\"nofollow\">Development of Uttarakhand: Issues and Perspectives</a>,\" GS Mehta, APH Publishing, 1999,&nbsp;<a class=\"internal mw-magiclink-isbn\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%B5%E0%A4%BF%E0%A4%B6%E0%A5%87%E0%A4%B7:%E0%A4%AA%E0%A5%81%E0%A4%B8%E0%A5%8D%E0%A4%A4%E0%A4%95_%E0%A4%B8%E0%A5%8D%E0%A4%B0%E0%A5%8B%E0%A4%A4/9788176480994\">ISBN 9788176480994</a></span></li>\r\n<li id=\"cite_note-4\"><span class=\"mw-cite-backlink\"><a title=\"ऊपर जायें\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8#cite_ref-4\" aria-label=\"ऊपर जायें\">&uarr;</a></span>&nbsp;<span class=\"reference-text\"><cite class=\"citation web\"><a class=\"external text\" href=\"https://amritvichar.com/lansdowne-is-the-stronghold-and-pleasing-hill-station-of-garhwal-rifles-it-was-settled-by-the-british/\" rel=\"nofollow\">\"गढ़वाल राइफल्स का गढ़ और मनभावन हिल स्टेशन है लैंसडाउन, अंग्रेजों ने बसाया था इसे\"</a>.&nbsp;<em>Amrit Vichar</em>&nbsp;(अंग्रेज़ी में). 2022-01-24<span class=\"reference-accessdate\">. अभिगमन तिथि&nbsp;<span class=\"nowrap\">2022-01-24</span></span>.</cite></span></li>\r\n<li id=\"cite_note-5\"><span class=\"mw-cite-backlink\"><a title=\"ऊपर जायें\" href=\"https://hi.wikipedia.org/wiki/%E0%A4%B2%E0%A5%88%E0%A4%82%E0%A4%B8%E0%A4%A1%E0%A4%BE%E0%A4%89%E0%A4%A8#cite_ref-5\" aria-label=\"ऊपर जायें\">&uarr;</a></span>&nbsp;<span class=\"reference-text\"><cite class=\"citation web\"><a class=\"external text\" href=\"http://www.censusindia.net/results/town.php?stad=A&amp;state5=999\" rel=\"nofollow\" aria-invalid=\"true\">\"Census of India 2001: Data from the 2001 Census, including cities, villages and towns (Provisional)\"</a>. भारतीय जनगणना आयोग. मूल से 16 June 2004 को&nbsp;<a class=\"external text\" href=\"https://web.archive.org/web/20040616075334/http://www.censusindia.net/results/town.php?stad=A&amp;state5=999\" rel=\"nofollow\" aria-invalid=\"true\">पुरालेखित</a>.</cite></span></li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<p>लैंसडाउन, उत्तराखंड का एक शांत हिल स्टेशन है, जो अपने शांतिपूर्ण माहौल और हरी-भरी हरियाली के लिए जाना जाता है। गढ़वाल पहाड़ियों के बीच बसा यह प्यारा शहर प्रकृति प्रेमियों और शांति चाहने वालों के लिए एक आदर्श स्थान है। अपने सुंदर देवदार के जंगलों, शानदार दर्शनीय स्थलों, और आकर्षक औपनिवेशिक वास्तुकला के साथ, लैंसडाउन शहर की भागदौड़ से एक ताजगी भरा पलायन प्रदान करता है।</p>', '', '', '', ''),
(31, 3, 'masoore', 'e3rtedfd', 'e3rtedfd', 'dfgdfgfdg', '<div class=\"col-lg-4 col-12 p-3\">\n<div class=\"card\"><img class=\"img-fluid card-img-top\" src=\"https://uttarakhandtourism.gov.in/themes/utdb_frontend/images/Flight_Image.jpg\">\n<div class=\"card-body\">\n<h4 class=\"title\">By Flight</h4>\n<div class=\"overflow-auto custom-scroll\">\n<p>&nbsp;</p>\n<p>Jolly Grant Airport is the nearest airport to Valley of Flowers but the roads are only connected up to Govind Ghat from where you have to&nbsp; trek for 16 km&nbsp; to reach Valley of Flowers.</p>\n<p>&nbsp;</p>\n</div>\n<a href=\"https://www.google.com/flights?hl=en#flt=/m/0dlv0..2019-01-13*./m/0dlv0.2019-01-17;c:INR;e:1;ls:1w;sd:0;t:h\" target=\"_blank\" rel=\"noopener noreferrer\">View Air Schedule</a></div>\n</div>\n</div>\n<div class=\"col-lg-4 col-12 p-3\">\n<div class=\"card\"><img class=\"img-fluid card-img-top\" src=\"https://uttarakhandtourism.gov.in/themes/utdb_frontend/images/Train_Image.jpg\">\n<div class=\"card-body\">\n<h4 class=\"title\">By Train</h4>\n<div class=\"overflow-auto custom-scroll\">\n<p>&nbsp;</p>\n<p>The nearest railway station to Valley of flowers is Rishikesh. Take a bus or taxi to reach Govind Ghat. Rishikesh railway station is situated 273 km before Govindghat on NH58.</p>\n<p>&nbsp;</p>\n</div>\n<a href=\"https://www.irctc.co.in/nget/train-search\" target=\"_blank\" rel=\"noopener noreferrer\">View Train Schedule</a></div>\n</div>\n</div>\n<div class=\"col-lg-4 col-12 p-3\">\n<div class=\"card\"><img class=\"img-fluid card-img-top\" src=\"https://uttarakhandtourism.gov.in/themes/utdb_frontend/images/Bus_Image.jpg\">\n<div class=\"card-body\">\n<h4 class=\"title\">By Road</h4>\n<div class=\"overflow-auto custom-scroll\">\n<p>&nbsp;</p>\n<p>Valley of Flowers is connected up to Govind Ghat with motor-able roads.</p>\n<p>&nbsp;</p>\n</div>\n<a href=\"http://www.utconline.uk.gov.in/\" target=\"_blank\" rel=\"noopener\">View Road Schedule</a></div>\n</div>\n</div>', '<p>gfdgdfgdfg</p>', '', '', '', ''),
(32, 4, 'auli', 'ZXasxcsdc', 'ZXasxcsdc', 'dfgdgdf', '<h1>cuisines</h1>\r\n<div id=\"post-25483\" class=\"post-25483 page type-page status-publish hentry\">\r\n<div class=\"row\">\r\n<div class=\"col-12\">\r\n<div>\r\n<div class=\"pull-right sample-img-cntr\">\r\n<div id=\"attachment_25868\" class=\"wp-caption alignnone\"><img class=\"size-medium wp-image-25868\" src=\"https://cdn.s3waas.gov.in/s33a0772443a0739141292a5429b952fe6/uploads/2018/03/2018031717-300x179.jpg\" sizes=\"(max-width: 300px) 100vw, 300px\" srcset=\"https://cdn.s3waas.gov.in/s33a0772443a0739141292a5429b952fe6/uploads/2018/03/2018031717-300x179.jpg 300w, https://cdn.s3waas.gov.in/s33a0772443a0739141292a5429b952fe6/uploads/2018/03/2018031717.jpg 755w\" alt=\"Bhang ki chutny -Spicy Cuisines Almora\" width=\"300\" height=\"179\" aria-describedby=\"caption-attachment-25868\">\r\n<p id=\"caption-attachment-25868\" class=\"wp-caption-text\">Bhang ki chutny</p>\r\n</div>\r\n</div>\r\n<h2>Bhang Ki Chutni</h2>\r\n<p>Bhang Ki Chutni Now this one is a real scene stealer when it comes to enhancing the taste of the cuisine of Uttarakhand. The fresh aroma and the tangy tamarind taste can stay on your tongue for quite a long time. Made from Hemp Seeds that has an irresistible aroma; cumin seeds, garlic leaves; tamarind and salt, this simple chutney compliments any dish made in Uttarakhand.</p>\r\n<div class=\"pull-left sample-img-cntr\">\r\n<div id=\"attachment_26791\" class=\"wp-caption alignnone\"><img class=\"size-medium wp-image-26791\" src=\"https://cdn.s3waas.gov.in/s33a0772443a0739141292a5429b952fe6/uploads/2018/04/2018041996-300x179.jpg\" sizes=\"(max-width: 300px) 100vw, 300px\" srcset=\"https://cdn.s3waas.gov.in/s33a0772443a0739141292a5429b952fe6/uploads/2018/04/2018041996-300x179.jpg 300w, https://cdn.s3waas.gov.in/s33a0772443a0739141292a5429b952fe6/uploads/2018/04/2018041996.jpg 755w\" alt=\"ingredient of Dubuk is either Bhat ki Dal, Gahat ki Dal or Arhar ki Dal, which is converted into a fine paste and then cooked in an iron kadhai over slow fire.\" width=\"300\" height=\"179\" aria-describedby=\"caption-attachment-26791\">\r\n<p id=\"caption-attachment-26791\" class=\"wp-caption-text\">Dubuk</p>\r\n</div>\r\n</div>\r\n<h2>Dubuk</h2>\r\n<p>If I have to pick one dish from Uttarakhand that I can call best then it will be Dubuk. What makes me and couple of others a fan of this dish is its indescribable taste. Subtle in taste and good for stomach, Dubuk is best served with plain rice, Bhang ki Chutney and Muli thechwa (crushed raddish). The main ingredient of Dubuk is either Bhat ki Dal, Gahat ki Dal or Arhar ki Dal, which is converted into a fine paste and then cooked in an iron kadhai over slow fire. The taste ladies and gentlemen is unbeatable! The best time to eat Dubuk would be winter; however, if you are a Dubuk lover like me, you can have it any day of the year!</p>\r\n<div class=\"pull-right sample-img-cntr\">\r\n<div id=\"attachment_26500\" class=\"wp-caption alignnone\"><img class=\"size-medium wp-image-26500\" src=\"https://cdn.s3waas.gov.in/s33a0772443a0739141292a5429b952fe6/uploads/2018/04/2018041168-300x179.jpg\" sizes=\"(max-width: 300px) 100vw, 300px\" srcset=\"https://cdn.s3waas.gov.in/s33a0772443a0739141292a5429b952fe6/uploads/2018/04/2018041168-300x179.jpg 300w, https://cdn.s3waas.gov.in/s33a0772443a0739141292a5429b952fe6/uploads/2018/04/2018041168.jpg 755w\" alt=\"Famous Sweet Almora Singodi\" width=\"300\" height=\"179\" aria-describedby=\"caption-attachment-26500\">\r\n<p id=\"caption-attachment-26500\" class=\"wp-caption-text\">Singodi Sweet</p>\r\n</div>\r\n</div>\r\n<h2>Singodi</h2>\r\n<p>Singodi Coming to Kumaon and not tasting Singodi is a sin! This sweet made of Khoya (condensed milk) and then wrapped into the leaf of Molu is iconic. The fresh smell of Molu leaf and the taste of condensed milk flavoured with cardamom and coconut will leave you asking for more. Almora is the most famous place to try Singodi in Uttarakhand.</p>\r\n<h2>Jhangore ki Kheer</h2>\r\n<p>Jhangora is type of millet and is the main ingredient of this dessert item. This sweet dish of Uttarakhand has the goodness of milk, cashews and raisins. This particular dessert is known for its rich texture and a taste that one cannot easily forget. High in nutrients and taste this is a must try after a heavy course of uttarakhand cuisine.</p>\r\n<div class=\"pull-right sample-img-cntr\">\r\n<div id=\"attachment_26501\" class=\"wp-caption alignnone\"><img class=\"size-medium wp-image-26501\" src=\"https://cdn.s3waas.gov.in/s33a0772443a0739141292a5429b952fe6/uploads/2018/04/2018041120-300x224.jpg\" sizes=\"(max-width: 300px) 100vw, 300px\" srcset=\"https://cdn.s3waas.gov.in/s33a0772443a0739141292a5429b952fe6/uploads/2018/04/2018041120-300x224.jpg 300w, https://cdn.s3waas.gov.in/s33a0772443a0739141292a5429b952fe6/uploads/2018/04/2018041120.jpg 698w\" alt=\"Famous Sweet of Almora Bal Mithai\" width=\"300\" height=\"224\" loading=\"lazy\" aria-describedby=\"caption-attachment-26501\">\r\n<p id=\"caption-attachment-26501\" class=\"wp-caption-text\">Bal Mithai Sweet</p>\r\n</div>\r\n</div>\r\n<h2>Bal Mithai</h2>\r\n<p>Bal Mithai is a brown chocolate-like fudge, made with roasted khoya, coated with white sugar balls, and is a popular sweet from the Himalayan state of Uttarakhand in India, especially regions around Almora. Bal Mithai has long been a specialty of the Almora district, and neighbouring Kumaon Hills.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<p>gfdg</p>', '', '', '', ''),
(57, 10, 'Ullam non amet quia', 'Error sit omnis sed ', 'Error-sit-omnis-sed-', 'In quia ad omnis nis', '<p>ghfghfgh</p>', '<p>ggghh</p>', '', '', '', ''),
(58, 10, 'Ullam non amet quia', 'Error sit omnis sed ', 'Error-sit-omnis-sed-', 'In quia ad omnis nis', '<p>ghfghfgh</p>', '<p>ggghh</p>', '', '', '', ''),
(59, 10, 'Ullam non amet quia', 'Error sit omnis sed ', 'Error-sit-omnis-sed-', 'In quia ad omnis nis', '<p>ghfghfgh</p>', '<p>ggghh</p>', '', '', '', ''),
(61, 10, 'Ullam non amet quia', 'Error sit omnis sed ', 'Error-sit-omnis-sed-', 'In quia ad omnis nis', '<p>ghfghfgh</p>', '<p>ggghh</p>', '', '', '', ''),
(62, 10, 'Ullam non amet quia', 'Error sit omnis sed ', 'Error-sit-omnis-sed-', 'In quia ad omnis nis', '<p>ghfghfgh</p>', '<p>ggghh</p>', '', '', '', ''),
(63, 10, 'Ullam non amet quia', 'Error sit omnis sed ', 'Error-sit-omnis-sed-', 'In quia ad omnis nis', '<p>ghfghfgh</p>', '<p>ggghh</p>', '', '', '', ''),
(67, 1, 'Ipsum rerum nesciun', 'A enim non distincti', 'A-enim-non-distincti', 'Sunt nisi dolores a', '<p>fdgdfgdfg</p>', '<p>&nbsp;dfdgdfg</p>', 'Aut non iure dolor q', 'Perferendis veniam ', '', ''),
(68, 4, 'Laudantium reprehen', 'Nostrum doloribus la', 'Nostrum-doloribus-la', 'Aut rem amet invent', '<p>fgdfg</p>', '<p>gfgfggdfg</p>', 'hello', 'helllo', 'hello', '');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `category` varchar(252) NOT NULL,
  `city_place_id` int(10) DEFAULT NULL,
  `top_foods` varchar(252) DEFAULT NULL,
  `food_images` varchar(252) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `category`, `city_place_id`, `top_foods`, `food_images`) VALUES
(5, 'place', 1, 'jholi bhat', 'kasar-devi-temple-6030388.jpg'),
(6, 'city', 1, 'dubak', 'dubak.jpg'),
(7, 'city', 1, 'ball mithai', 'baalmithai.jpg'),
(8, 'city', 1, 'ball mithai', 'dubak.jpg'),
(9, 'place', 28, 'ffghfhfg', 'almora5.jpg'),
(10, 'place', 28, 'ffghfhfg', 'almora4.jpg'),
(11, 'place', 2, 'qafererer', 'almora5.jpg'),
(12, 'place', 2, 'qafererer', 'almorA3.jpg.png'),
(13, 'place', 2, 'qafererer', 'almora4.jpg'),
(14, 'place', 1, 'qafererer', 'almora5.jpg'),
(15, 'place', 1, 'qafererer', 'almorA3.jpg.png'),
(16, 'place', 1, 'qafererer', 'almora4.jpg'),
(17, 'place', 1, 'qafererer', 'almora5.jpg'),
(18, 'place', 1, 'qafererer', 'almorA3.jpg.png'),
(19, 'place', 1, 'qafererer', 'almora4.jpg'),
(20, 'city', 1, '15151515151', 'ai-generated-8775235_1280.png'),
(25, 'city', 1, 'uyjkh', '1725262287_0ad543d3023008cb75b8.jpg'),
(26, 'city', 2, 'chicken', 'old-tree-8100015_640.jpg'),
(27, 'city', 2, 'chicken', 'bird-7623166_640.jpg'),
(28, 'city', 2, 'chicken', 'halcyon-1352522_640.jpg'),
(29, 'city', 2, 'chicken', 'cute-8654927_640.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `category` varchar(10) DEFAULT NULL,
  `city_place_id` int(10) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `category`, `city_place_id`, `image`, `created_at`, `update_at`) VALUES
(15, 'place', 8, '1724911376_2cebc3c661416b55b846.jpg', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(52, 'city', 2, '1724933038_31dbad0d0b5c015bb88e.jpg', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(53, 'city', 9, 'almora1.webp', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(54, 'place', 1, '1724934709_a6f50a318e5f0dace372.avif', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(55, 'place', 1, 'png-transparent-php-logo-modern-php-new-features-and-good-practices-computer-programming-scripting-language-computer-software-source-code-debugging-html-thumbnail.png', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(56, 'place', 1, 'php1.png', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(57, 'place', 1, 'gear.png', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(58, 'place', 1, 'number-7-manchester-united-mobile-8aylc2w6alwf1bqs (1).jpg', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(59, 'place', 1, 'number-7-manchester-united-mobile-8aylc2w6alwf1bqs.jpg', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(60, 'place', 2, 'old-tree-8100015_640.jpg', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(61, 'city', 1, 'risikesh4.jpg', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(62, 'city', 1, '1724930479_2cedb2a49ee95c8b6b12.avif', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(63, 'city', 1, '1724940372_e68fd618767ffb37db2f.jpg', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(64, 'city', 1, 'gaurav-k-g-to6EdkR_A-unsplash.jpg', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(65, 'place', 1, 'vecteezy_indian-flag-abstract-background-wallpaper-for-independence_28695557.jpg', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(66, 'place', 8, 'vecteezy_indian-flag-abstract-background-wallpaper-for-independence_28695557.jpg', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(67, 'place', 1, 'vecteezy_indian-flag-abstract-background-wallpaper-for-independence_28695557.jpg', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(68, 'place', 1, 'bigmu.jpg', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(69, 'place', 1, 'bigmu.jpg', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(70, 'place', 1, 'bigmu.jpg', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(71, 'place', 1, 'vecteezy_indian-flag-abstract-background-wallpaper-for-independence_28695557.jpg', '2024-08-16 10:55:47', '2024-08-16 10:55:47'),
(73, 'city', 1, 'home-2.jpg', '2024-08-29 12:40:42', '2024-08-29 12:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(252) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(5, 'garry@gmail.com'),
(6, 'garry@gmail.com'),
(7, 'saury@gmail.com'),
(8, 'rwtgaurav40@gmail.com'),
(9, 'rwtgaurav40@gmail.com'),
(10, 'rwtgaurav40@gmail.com'),
(11, 'rwtgaurav40@gmail.com'),
(12, 'rwtgaurav40@gmail.com'),
(13, 'rwtgaurav40@gmail.com'),
(14, 'rwtgaurav40@gmail.com'),
(15, 'rwtgaurav40@gmail.com'),
(16, 'rwtgaurav40@gmail.com'),
(17, 'rwtgaurav40@gmail.com'),
(18, 'rwtgaurav40@gmail.com'),
(19, 'rwtgaurav40@gmail.com'),
(20, 'rwtgolu64@gmail.com'),
(21, 'rwtgaurav40@gmail.com'),
(22, 'rwtgolu65@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_comments`
--

CREATE TABLE `user_comments` (
  `id` int(11) NOT NULL,
  `user_ip` varchar(255) DEFAULT NULL,
  `blog_id` int(255) DEFAULT NULL,
  `name` varchar(252) DEFAULT NULL,
  `email` varchar(252) DEFAULT NULL,
  `comment` varchar(252) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_comments`
--

INSERT INTO `user_comments` (`id`, `user_ip`, `blog_id`, `name`, `email`, `comment`, `created_at`, `updated_at`) VALUES
(15, '192.168.30.107', 19, 'hfg', 'sijamuw@mailinator.com', 'dfd', '2024-09-04 09:26:26', '2024-09-04 09:26:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_likes`
--
ALTER TABLE `blog_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories_blogs`
--
ALTER TABLE `categories_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `explore_uttarakhand`
--
ALTER TABLE `explore_uttarakhand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_comments`
--
ALTER TABLE `user_comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `blog_likes`
--
ALTER TABLE `blog_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories_blogs`
--
ALTER TABLE `categories_blogs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `explore_uttarakhand`
--
ALTER TABLE `explore_uttarakhand`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_comments`
--
ALTER TABLE `user_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
