-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 09:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) COLLATE utf32_persian_ci NOT NULL,
  `lname` varchar(100) COLLATE utf32_persian_ci NOT NULL,
  `age` int(11) NOT NULL,
  `img` varchar(200) COLLATE utf32_persian_ci NOT NULL,
  `username` varchar(100) COLLATE utf32_persian_ci NOT NULL,
  `password` varchar(100) COLLATE utf32_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `age`, `img`, `username`, `password`) VALUES
(1, 'زهرا', 'نیک انجام', 22, 'http://localhost/pro/thumb/images.jpeg', 'zahra', 'zahra123');

-- --------------------------------------------------------

--
-- Table structure for table `bottemmenu`
--

CREATE TABLE `bottemmenu` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `link`) VALUES
(6, 'ورود', 'http://localhost/pro/login.php'),
(7, 'خانه', 'http://localhost/pro/index.php');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `src` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `content` varchar(5000) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `src`, `content`) VALUES
(1, 'با بنزین ۳۰۰۰ تومانی؛ آیا گازسوز کردن خودرو‌ها گزینه مناسبی است؟', 'thumb/1103924_903.jpg', 'در دقایق اولیه روز ۲۴ آبان ماه سال جاری بود که مسئولین سرانجام تصمیم خود را برای سهمیه بندی و افزایش قیمت بنزین عملیاتی کردند. از این تاریخ به بعد به هر یک از خودرو‌ها سهمیه ۶۰ لیتر بنزین ماهانه به قیمت هر لیتر ۱۵۰۰ تومان تعلق می‌گرفت و مازاد بر این مصرف، هر مالک خودرو باید به ازای هر لیتر ۳ هزار تومان پرداخت می‌کرد.\r\n\r\nبا این تصمیم مسئولین، قیمت هر لیتر بنزین سهمیه بندی در مقایسه با قیمت قبل که هزار تومان بود، رشد ۵۰ درصدی و در مقایسه با قیمت آزاد رشد ۲۰۰ درصدی پیدا کرد. این افزایش قیمت بنزین باعث شد تا هزینه‌های بیشتری به مالکان خودرو تحمیل شود و مالکان برای فرار از زیر بار افزایش قیمت بنزین به دوگانه سوز کردن خودرو‌های خود روی بیاورند.\r\n\r\nاردشیر دادرس، رئیس انجمن صنفی سی‌ان‌جی و صنایع وابسته طی مصاحبه‌ای گفت: از وقتی سهمیه‌بندی بنزین و الزام رانندگان به استفاده از کارت سوخت شخصی خودرو آغاز شده است، روزانه حدود ۳۰ تا ۴۰ هزار درخواست برای تبدیل خودرو‌های بنزین‌سوز به دوگانه‌سوز در کل کشور ثبت می‌شود. به‌ علت حجم بالای متقاضیان، توان کافی برای پوشش‌دهی تقاضا سخت است و خبر رسیده صف انتظار تا چهار ماه آینده نیز ثبت شده است.\r\nقیمت گازسوز کردن خودرو چقدر است؟\r\n\r\nهزینه گازسوز کردن به نوع خودرو بستگی زیادی ندارد و مورد مهم در این میان حجم مخزن است؛ برای نمونه، می‌توان برای خودرویی مانند پراید از مخزن ۶۰ لیتری استفاده کرد و برای سایر خودروها این حجم متفاوت است. از لحاظ هزینه گازسوز کردن برای خودرویی مانند پراید، قیمت تقریبی ۴ میلیون تومان اعلام شده است. قیمت مخزن ۶۰ لیتری قبل از سهمیه‌بندی بنزین حدود ۱ میلیون و ۲۵۰ هزار تومان بود، در حالی که الان به حدود ۲ میلیون و ۴۰۰ هزار تومان رسیده است. مخزن ۱۰۰ لیتری هم که ۱ میلیون و ۵۵۰ هزار تومان بود حال قیمت دو میلیون و ۸۰۰ هزار تومانی را شاهد است.\r\n\r\nچه تعداد خودرو گازسوز شده اند؟\r\n\r\nمحسن جوهری رئیس هیات مدیره انجمن صنفی CNG کشور درباره آمار خودروهای تبدیل‌ شده به نوع گازسوز اظهار کرد: تقریبا ۹۱۸ هزار دستگاه توسط وزارت نفت به نمونه‌های گازسوز تبدیل شده‌اند و آمار سایر خودروهایی که به صورت‌های مختلف گازسوز شده‌اند مشخص نیست. از لحاظ آمار غیر رسمی به نظر می‌رسد که این تعداد به یک تا دو میلیون دستگاه نیز برسد.\r\n\r\nمزایای گازسوز کردن خودروها چیست؟\r\n\r\nهر چند گازسوز کردن خودروهای بنزین سوز به گفته بسیاری موجب آسیب به قطعات خودرو می شود و در نتیجه باید مالک خودرو یک هزینه تعویض قطعات را نیز تحمل کند، این تبدیل سوخت خودروها به گازسوز می تواند مزایایی را نیز به همراه داشته باشد.\r\n\r\nمشکلی که این روزها گریبان بسیاری از شهرهای بزرگ ایران را گرفته و باعث تعطیلی کلان شهری های کشور شده است، موضوع آلودگی هواست که در بسیاری از شهرها به حد هشدار رسیده است. گازسوز کردن خودروها شاید بتواند مرهم کوچکی بر زخم های آلودگی هوای کلان شهرها باشد. به طور کلی سوخت سی ان جی در مقایسه با دیگر سوخت های کربنی دارای پایین ترین نسبت کربن به هیدورژن یعنی یک اتم کربن به چهار اتم هیدروژن است و در نتجه می توان گفت سوخت گاز سی ان جی کربن کمتری را منتشر می کند؛ بنابراین اولین مزیت گازسوز کردن خودروها این است که سوخت گاز آلودگی بسیار کمتری نسبت به سوخت بنزین دارد.\r\n\r\nدومین مزیت گازسوز کردن خودروها کاهش مصرف بنزین و درآمدی است که از این کاهش نصیب دولت خواهد شد. علیرضا صادق آبادی مدیرعامل شرکت ملی پالایش و پخش فرآورده‌های نفتی ایران طی مصاحبه ای در 24 آذر ماه سال جاری با اشاره به اینکه با دوگانه‌سوز شدن ۱.۴ میلیون خودرو عمومی روزانه ۱۰ میلیون لیتر بنزین در کشور صرفه‌جویی می‌شود، گفت:‌ با در نظر گرفتن قیمت ۵۰ سنت برای هر لیتر بنزین این صرفه‌جویی به معنای درآمد سالانه ۱.۸ میلیارد دلاری خواهد بود.\r\n\r\nالبته جواد نوفرستی، کارشناس اقتصاد انرژی معتقد است که به دلیل وجود سی ان جی احتمال کاهش مصرف بنزین تا 80 میلیون لیتر هم وجود دارد. وی طی مصاحبه ای گفت: گاز طبیعی فشرده (سی‌ان‌جی) قبل از ۲۴ آبان، روزانه ۱۹ میلیون متر‌مکعب فروش داشت. میزان فروش گاز طبیعی در سومین روز سهمیه‌بندی به ۲۲ میلیون متر‌مکعب رسید. در محاسبه‌ای مشخص شد که با اجرای طرح سهمیه‌بندی بنزین و اصلاح قیمت آن، رقم فروش تا تابستان می‌تواند به ۳۰ میلیون مترمکعب برسد؛ و از آنجا که هر لیتر بنزین معادل یک‌ مترمکعب سی‌ان‌جی است؛ یعنی ۱۱ میلیون لیتر از مصرف بنزین کم خواهد شد.\r\n\r\nسومین مزیت گازسوز کردن خودرو‌ها به گفته کارشناسان صرفه جویی در هزینه‌های خانوارهاست. حمید قاسمی مجری طرح سی‌ان‌جی شرکت ملی پخش فرآورده‌های نفتی طی مصاحبه‌ای در ۱۵ آذر ماه سال جاری گفت: با گاز سوز کردن خودرو ماهانه ۴۰۰ هزار تومان در هزینه خانوار‌ها صرفه جویی می‌شود که سالانه ۵ تا ۶ میلیون تومان برای هر خانوار صرفه جویی به همراه خواهد داشت.\r\n\r\nفعال سازی کارخانه‌های مخزن سازی را می‌توان چهارمین مزیت گازسوز کردن خودرو‌ها دانست. اردشیر دادرس رئیس انجمن سی ان جی و صنایع وابسته گفت: ۵ تا ۶ کارخانه مخزن سازی در تهران سالانه بالای یک میلیون مخزن می‌توانند تولید کنند که در دنیا بی نظیرند، اما اکنون نیمه فعال هستند که دولت با ترمیم کارخانه‌ها می‌تواند به تولید و خدمات رسانی کمک کند. همچنین محسن جوهری رئیس هیات مدیره انجمن صنفی CNG کشور نیز طی مصاحبه دیگری گفت: در کشور ۱۰ سازنده مخزن داریم که تنها دو شرکت فعال هستند و ظرفیت تولید آن‌ها به شدت محدود است. شرکت‌های کیت‌ساز نیز همین روند را دارند و باید از آن‌ها حمایت شود تا بتوانند مواد اولیه خود را وارد کنند.'),
(2, 'اکنون زمان مناسبی برای حمله به ایران است!', 'thumb/1104764_915.jpg', 'گمانه زنی در مورد جنگ بین ایران و اسرائیل همواره در میان محافل رسانه ای، رسمی و تحقیقاتی جهان مطرح بوده و هرازچندگاهی از آمادگی دو بازیگر برای رفتن به سمت جنگ سخن به میان می آید .\r\n در همین رابطه، اخیرا همزمان با اظهارات وزیر جنگ اسرائیل مبنی بر تبدیل سوریه به ویتنام ایران، بار دیگر گمانه زنی‌ها در این رابطه تقویت شده است.\r\n\r\nدر این زمینه، شبکه خبری «راشاتودی» در مطلبی به آمادگی ایران و اسرائیل برای جنگ پرداخته و نوشته است: در حالی که بیشتر رسانه‌های داخلی و بین المللی بر رسوایی و استیضاح ترامپ در آمریکا تمرکز دارند، علائم بسیاری مبنی بر وقوع یک درگیری بزرگ در خاورمیانه وجود دارد.\r\n\r\nاخیرا فشار‌های زیادی علیه ایران به ویژه فشار‌های اقتصادی وارد شده است. به همین جهت تهران ممکن است به دنبال تمرکز توجهات به سمت دیگری باشد.\r\n\r\nایالات متحده اخیراً تحریم‌های جدیدی علیه شرکت‌های ایرانی از جمله بزرگترین شرکت هواپیمایی این کشور وضع و تهران را به انتقال کمک‌های کشنده به یمن متهم کرده است. به نظر می‌رسد این اقدام اقتصاد ایران را به وضعیت فروپاشی نزدیک تر می‌کند، زیرا احتمالاً این شرکت هواپیمایی از استفاده از فرودگاه‌ها در کشور‌هایی که از مواجهه با خشم دولت ترامپ ترس دارند، منع خواهد شد.\r\nاز سوی دیگر، مشاوران امنیت داخلی آمریکا و رژیم صهیونیستی چهارشنبه با یکدیگر دیدار و درباره مسائل مختلف از جمله ایران رایزنی کردند.\r\n\r\n«رابرت اُ براین»، مشاور امنیت ملی آمریکا، چهارشنبه در کاخ سفید با «بن شابات» همتای صهیونیست خود، دیدار کرد.\r\n\r\nدر بیانیه مشترکی که این دو مقام بعد از دیدار با یکدیگر صادر کرده‌اند آمده است: «دو طرف بر سر ادامه همکاری‌ها جهت مقابله با فعالیت‌ها و نفوذ مخرب ایران و همچنین پایش تبعات ناآرامی در داخل ایران رایزنی کردند.»\r\n\r\nطبق این بیانیه، اُبراین و شابات درباره سوریه، عراق، لبنان و سایر مسائل منطقه هم بحث و تبادل نظر کرده‌اند.\r\n\r\nمشاوران امنیت ملی آمریکا و رژیم صهیونیستی بر سر «هدف دوجانبه نزدیک‌تر کردن رابطه ایالات متحده-اسرائیل» توافق کرده‌اند.\r\n\r\nدر بخشی از این بیانیه آمده است: «پامپئو و شابات به تیم‌های متبوع خود دستور داده‌اند در ماه‌های پیش روی، تشکیل کارگروه‌های مشترک را برای بهبود روابط دوجانبه در عرصه‌های مختلف اعم از سایبری، اطلاعاتی امنیتی و امنیت مخابراتی، در جهت مقابله با تهدید‌های ایران و سایر بازیگران ادامه دهند.»\r\n\r\nپایگاه خبری اکسیوس خاطرنشان کرد: اهمیت این دیدار و رایزنی‌های انجام شده از این لحاظ است که مقامات اسرائیلی می‌گویند به علت اغتشاشات در ایران و همچنین تظاهرات در عراق و لبنان، فرصتی برای اعمال فشار بیشتر بر دولت ایران و تضعیف نفوذ این کشور در منطقه ایجاد شده است.\r\n\r\nفضای موجود و سفر‌های سریالی مقامات امنیتی و نظامی آمریکا به اسراییل بسیار شبیه به شرایط تابستان سال ۲۰۱۱ و افزایش سفر‌های مقامات پنتاگون در آن مقطع به اسراییل است.\r\n\r\nدر آن مقطع (تابستان ۲۰۱۱) آن طور که بعد‌ها افشا شد، اسرائیل قصد داشت به تنهایی به تأسیسات هسته‌ای ایران حمله کند. در آن سال نخست وزیر \"بنیامین نتانیاهو\" و وزیر دفاع وقت او \"ایهود باراک\" طرفدار چنین حمله‌ای بودند و ژنرال‌های آمریکایی، یکی پس از دیگری به اسراییل رفتند تا مانع چنین امری شوند و موضع همتایان اسراییلی خود را که اتفاقا آن‌ها هم مخالف حمله به ایران بودند، در برابر تصمیم نتانیاهو و باراک، تقویت کنند و البته چنین هم شد.\r\n\r\nبا وجودی که به نظر می‌رسد، هم اکنون هیچ طرح حمله‌ای علیه ایران در دستور کار اسراییل نیست ـ چون ایران هنوز اصولی به توافق هسته‌ای (برجام) متعهد است و کاهش تعهدات اخیر این کشور از برجام هم هنوز از خط غیرقابل تحمل اسرائیل عبور نکرده است ـ اظهارات اخیر مقامات اسرائیلی در مورد ایران غیر منتظره و تهاجمی بوده است.\r\n\r\nروز یکشنبه، نتانیاهو و وزیر دفاع او «نفتالی بنت» از مرز‌های سوریه و لبنان بازدید کردند. نتانیاهو در جریان این بازدید اعلام کرد که اسرائیل برای خنثی کردن قاچاق اسلحه از ایران به سوریه و مسدود کردن تلاش‌های تهران برای \"تبدیل عراق و یمن به پایگاه‌های پرتاب موشک به اسراییل\" تلاش خواهد کرد.\r\n\r\nنفتالی بنت فردای آن روز هم در مراسم یادبود رسمی برای سربازانی که در جنگ سینا در سال ۱۹۵۶ کشته شدند، گفت: برای دشمنان ما روشن است که ما به هرگونه تلاش برای نابودی‌مان پاسخ خواهیم داد. پاسخ ما بسیار دقیق و بسیار دردناک خواهد بود. مخاطب این سخنان من تنها افرادی که از جبهه جنوب (غزه) زندگی اسراییلی‌ها را تهدید می‌کنند، نیست بلکه خطاب به جبهه شمال (حزب الله لبنان) هم هست.\r\n\r\nنفتالی بنت، اخیرا در یک جلسه پشت در‌های بسته با مقامات امنیتی و نظامی گفته است: «فرصت استراتژیک» جدیدی در مقابل ایران فراهم شده که می‌تواند فشار نظامی اسرائیل علیه اهداف ایرانی در سوریه را بیشتر کند. از دیدگاه این مقام دست‌راستی و تندرو، ارتش اسرائیل باید فعالیت شدیدتری علیه ایران در سوریه انجام دهد تا هزینه‌های ایران را در سوریه به قدری بالا ببرد که این کشور خروج از سوریه را به صرفه‌تر ارزیابی کند.\r\n\r\nدر حالی که ایالات متحده تا حدودی تمایلی به حمله مستقیم به ایران یا نیروهایش نشان نداده است، بازیگر دیگری در خاورمیانه وجود دارد که به نظر می‌رسد به طور فزاینده‌ای مایل به انجام این کار از طرف واشنگتن است: اسرائیل.\r\n\r\nفقط ماه گذشته، اسرائیل بی سابقه اعلام کرده که ارتش این رژیم حمله بسیار شدیدی علیه نیرو‌های ایرانی و اهداف ارتش سوریه انجام داده است که در این روند دست کم ۲۱ نظامی و دو غیرنظامی کشته شده اند.\r\n\r\nنخست وزیر اسرائیل بنیامین نتانیاهو همچنین ایران را به برنامه ریزی برای حمله به اسرائیل متهم کرد و قول داد، هر کاری که ممکن است، انجام دهد تا از وقوع این امر جلوگیری کند. البته نتانیاهو برای حفظ قدرت داخلی خود و رهایی از بند مجازات ممکن است به این مساله دامن بزند.'),
(3, 'تعلل شدید مسئولان برای نجات ساکنان تهران از شنبه سیاه !', 'thumb/imags.jpg', 'آیا می‌شود آلودگی هوای تهران را از بین برد؟ شواهد حکایت از آن دارد که پاسخ مسئولان به این سوال منفی است، اما نمی‌خواهند پاسخشان را علنی کنند.\r\n\r\n پس از آنکه باران به مدد شهروندان پرشمار تهرانی رسید و از آلودگی شدید و آزار دهنده نجاتشان داد، بار دیگر شرایط در حال بازگشت به وضعیت وخیم روز‌های ابتدایی هفته گذشته است، چون پایداری جوی در پیش خواهد بود.\r\n\r\nآن گونه که پیش بینی‌های هواشناسی نشان می‌دهد، پایداری جوی در پیش است که نتیجه آن، افزایش غلظت آلاینده‌ها در هوا و کاهش کیفیت هواست؛ وضعیتی که با توجه به وارونگی جوی، احتمالا شاخص آلودگی هوا را در وضعیت «ناسالم» و حتی «بسیار ناسالم» قرار خواهد داد.\r\n\r\nاین در حالی است که واکنش مسئولان به آلودگی هوا در روز‌های گذشته، تصمیمات تکراری از جمله تعطیلی مدارس و دانشگاه ها، تشدید طرح‌های محدودیت ترافیکی از جمله اعمال طرح زوج و فرد از درب منازل و ممنوعیت تردد کامیون‌ها و فعالیت معادن شن و ماسه بوده است.\r\n\r\nاگر از میزان تاثیر این دست تصمیمات در کاهش آلودگی هوا صرف نظر هم کنیم، اشکال بزرگی که متوجه این رویکرد مقابله با آلودگی هواست، چرایی اعمال نشدن آن‌ها برای چند روز پیاپی است؛ اینکه هر روز برای فردا تصمیم گرفته می‌شود، در حالی که اگر مدارس برای دو سه روز پیاپی تعطیل شوند، اتفاق بهتری رقم خواهد خورد.\r\n\r\nبه تعبیر دیگر، وقتی که مشخص است وضعیت جوی در روز‌های آتی چگونه است و می‌شود پیش بینی کرد که آلودگی هوا تشدید خواهد شد، چرایی تشکیل هر روز جلسه کمیته اضطرار آلودگی هوا و تصمیمات تکراری برای روز بعد، عجیب به نظر می‌رسد.\r\n\r\nتصمیمی که می‌شود برای چند روز گرفت تا آن دسته از شهروندان که می‌توانند از آلودگی هوا فرار کرده و به سفر بروند، تهران را ترک کنند و به واسطه کاهش جمعیت و تردد در سطح شهر، آلودگی هوا ولو اندک، کاهش بیابد؛ با این یادآوری که برای تعطیلاتی از این دست فواید دیگری نیز می‌توان برشمرد.\r\n\r\nبنابراین، طبیعی است که پیش بینی پایداری هوا برای هفته آتی و فقدان بارش و نزولات جوی، معنایی جز افزایش شدید آلودگی هوا نداشته باشد و نگرانی از آثار تردد در این هوای آلوده، دغدغه مهم ساکنان پرشمار تهران برای روز‌های آتی باشد؛ دغدغه‌ای که این سوال را پررنگ می‌کند آیا راه گریزی از آلودگی هوای تهران نیست؟\r\n\r\nپرسشی کلیدی که ظاهرا پاسخ مسئولان از جمله اعضای کارگروه اضطرار آلودگی هوا بدان منفی است، چون اگر این گونه نبود، می‌کوشیدند چیزی بیش از مسکن‌های کوتاه مدت و روز به روز برایش تجویز کنند، نه اینکه بدانند شنبه‌ای آلوده در پیش است و تصمیم گیری برای تعطیلی مدارس برای شنبه را هم به ساعات آخر موکول کنند.\r\n\r\nرفتاری عجیب که نشان می‌دهد سلامت مردم به دست گروهی سپرده شده که نه تنها قصد دارد ناتوانی اش در کاهش آلودگی هوا را لاپوشانی کند، که حتی در تصمیم گیری های مناسب در زمان مناسب هم تعلل به خرج می‌دهد؛ مثل امروز که جلسه شان بی نتیجه به پایان رسید تا تعطیل شدن یا نشدن مدارس برای روز شنبه به جلسه فردایشان موکول شود!\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `src` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `src`, `title`) VALUES
(2, 'http://localhost/pro/thumb/img_mountains_wide.jpg', 'Caption one'),
(3, 'http://localhost/pro/thumb/img_nature_wide.jpg', 'Caption Two'),
(4, 'http://localhost/pro/thumb/img_snow_wide.jpg', 'Caption Three');

-- --------------------------------------------------------

--
-- Table structure for table `specialpost`
--

CREATE TABLE `specialpost` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `src` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `content` varchar(1000) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `specialpost`
--

INSERT INTO `specialpost` (`id`, `title`, `src`, `content`) VALUES
(1, 'بهترین طرح و رنگ', 'http://localhost/pro/thumb/post1.jpg', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. '),
(2, 'نمادی از آسایش و آرامش', 'http://localhost/pro/thumb/posts.jpg', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. '),
(3, 'نقش اولِ دورهمــی های متفاوت', 'http://localhost/pro/thumb/postm.jpg', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. '),
(4, 'با ما بهترین ها را تجربه کنید', 'http://localhost/pro/thumb/postr.jpg', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bottemmenu`
--
ALTER TABLE `bottemmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialpost`
--
ALTER TABLE `specialpost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bottemmenu`
--
ALTER TABLE `bottemmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `specialpost`
--
ALTER TABLE `specialpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
