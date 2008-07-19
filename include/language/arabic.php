<?php
/*
XtraUpload - File Hosting Software
Copyright (C) 2006-2007  Matthew Glinski and XtraFile.com
Link: http://www.xtrafile.com
-----------------------------------------------------------------
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program(LICENSE.txt); if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/
// Arabic Translation BY Amine the_doc@lesprodusat.com
// Text Strings are defined using the following:
// {FILENAME)/{STRING_NUMBER}
// so for the file main2.php the first piece of text in this array would look like this:
// $lang['home']['1'] = 'Uploading your file! ';

//Language Charset, MetaTag
$lang_charset = "UTF-8";

$lang = array(); // Define the $lang variable as an array
####################################
####################################
####################################
// BEGIN FILE: include/pages/home.php
$lang['home'] = array(); 
$lang['home']['1'] = 'تحميل الملف! ';
$lang['home']['2'] = '<br>الملف قيد الرفع! <br> الرجاء الانتظار حتى يتم الرفع. <br />
يمكنك استعمال الرفع بالفلاش المرة القادمة . يتم الان رفع الملف! ';
$lang['home']['3'] = 'تـم';
$lang['home']['4'] = 'احصاء: ';
$lang['home']['5'] = 'لـ';
$lang['home']['6'] = 'ارسل ( الى';
$lang['home']['7'] = 'الوقت المتبقي: ';
$lang['home']['8'] = ' ثانية';
$lang['home']['9'] = 'الوقت المنقضي: ';
$lang['home']['10'] = 'لامتيازات اخرى يمكنك الحصول على ';
$lang['home']['11'] = 'مركز رفع الملفات';
$lang['home']['12'] = 'تحميل ملفات';
$lang['home']['13'] = 'الرفع عن طريق الفلاش';
$lang['home']['14'] = 'الرفع عن طريق رابط';
$lang['home']['15'] = 'الرفع عن طريق المتصفح';
$lang['home']['16'] = 'لقد تم العثور على الملف.<br />
الرجاء الانتظار للحظات.';
$lang['home']['17'] = 'اختر ملف لرفعه   ';
$lang['home']['18'] = ' ميقا بايت كحد اقصى للملف ';
$lang['home']['19'] = 'رابط الملف:';
$lang['home']['20'] = '<strong> : الوصف</strong> ';
$lang['home']['21'] = '<strong>: الباسوورد</strong> ';
$lang['home']['22'] = '  رفع الملف  ';
$lang['home']['23'] = 'الملف المراد رفعه';
$lang['home']['24'] = 'ادخل كود هوية الملف لتحميله :';
$lang['home']['25'] = '  !تحميل الملف   ';
$lang['home']['26'] = '<b>جعل الملف مميز</b>';
$lang['home']['27'] = 'نعم';
$lang['home']['28'] = 'لا';
$lang['home']['29'] = 'الملفات المميزة ';
$lang['home']['30'] = 'ارسال تفاصيل الملف بالاميل';
$lang['home']['31'] = 'افصل بين الاميلات بالفاصلة(,)';
$lang['home']['32'] = 'الى غاية 100 اميل. سيتحصلون على المعلومات ، الخصائص/ والباسوورد للملف.';
$lang['home']['33'] = 'FastPass! فاست باس';
$lang['home']['34'] = 'خيارات متقدمة';
$lang['home']['35'] = '';
// END FILE: include/pages/home.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/main.php
$lang['main'] = array(); 
$lang['main']['1'] = 'وصلت للحد الاقصى من المحاولات  ';
$lang['main']['2'] = ' محاولات دون نجاح!';
$lang['main']['3'] = 'الرجاء ادخال النص في الصورة قبل ان تتمكن من رفع ملفات<br />
';
$lang['main']['4'] = 'حاول مرة اخرى';
// END FILE: include/pages/main.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/logout.php
$lang['logout'] = array(); 
$lang['logout']['1'] = '!تم تسجيل الخروج بنجاح';
$lang['logout']['2'] = 'يتم تـحويلك الان';
// END FILE: include/pages/logout.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/rate.php
$lang['rate'] = array(); 
$lang['rate']['1'] = ' الرجاء تحديد ملف للتصويت';
$lang['rate']['2'] = 'هوية الملف غير صحيحة، يرجى التحقق من ذلك والمحاوله مرة اخرى.';
$lang['rate']['3'] = 'الملف للتصويت، حسب هوية الملف: ';
$lang['rate']['4'] = 'احصل على الملف';
$lang['rate']['5'] = '.لم يتم العثور على الملف <br />
 الرجاء التاكد من الرابط ثم حاول مرة أخرى.';
$lang['rate']['6'] = 'عرض وصف الملف';
$lang['rate']['7'] = 'اعطاء نقطة للملف ';
$lang['rate']['8'] = 'نوع الملف: ';
$lang['rate']['9'] = 'تحميل الملف';
$lang['rate']['10'] = 'التصويت الحالي:';
$lang['rate']['11'] = '!لم يصوت عليه بعد';
$lang['rate']['12'] = 'الوصف:';
$lang['rate']['13'] = ' صوت لهذا الملف  ';
$lang['rate']['14'] = '-- اختر نقطة--';
$lang['rate']['15'] = '  صوت لهذا الملف  ';
// END FILE: include/pages/rate.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/points.php
$lang['points'] = array(); 
$lang['points']['1'] = 'حسابك قد مدد لـ ';
$lang['points']['2'] = ' يوم/ايام';
$lang['points']['3'] = 'لا تملك ما يكفي من النقاط لتوسيع حساباتك';
$lang['points']['4'] = 'ليس لديك تصريح لتوسيع حسابك';
$lang['points']['5'] = 'اسم المستخدم: ';
$lang['points']['6'] = 'مجموعة المستخدم: ';
$lang['points']['7'] = 'حسابك ';
$lang['points']['8'] = 'ينتهي في  ';
$lang['points']['9'] = ' دائم الصلاحية';
$lang['points']['10'] = ' يمكنك تمديد حسابك بـ ';
$lang['points']['11'] = ' يوم/ايام بـ ';
$lang['points']['12'] = ' نقطة';
$lang['points']['13'] = 'لديك الان ';
$lang['points']['14'] = 'مددت حسابك';
$lang['points']['15'] = 'يجب تسجيل الدخول لتسيير نقاطك';
$lang['points']['16'] = 'حسابك غير محدود بمدة ، لذلك لا يمكنك تمديده.';
$lang['points']['17'] = 'لا تملك ما يكفي من نقاط لتمديد حسابك. <br />
يجب ان بتوفر لديك على الاقل ';
$lang['points']['18'] = 'نقطة';
// END FILE: include/pages/points.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/support.php
$lang['support'] = array(); 
$lang['support']['1'] = 'الرجاء اختيار أحد الخيارات التالية من اجل الحصول على ادق خدمة العملاء من قبلنا. <br />
ونحن حاليا لا تقدم الدعم المجاني كما نعمل على التوسع في شبكة الخدمات لدينا ، في المستقبل القريب ، هذا وسيتم تقديم الخدمة. ';
$lang['support']['2'] = 'الاسئلة الشائعة';
$lang['support']['3'] = 'البريد الإلكتروني لخدمة العملاء';
// END FILE: include/pages/support.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/url.php
$lang['url'] = array(); 
$lang['url']['1'] = 'الرجاء اختيار ملف للرفع قبل النقر على رفع.';
$lang['url']['2'] = 'الملف كبير جدا. الحجم اكبر من ';
$lang['url']['3'] = ' ميغابايت';
$lang['url']['4'] = 'امتداد الملف(';
$lang['url']['5'] = ') غير مسموح به';
$lang['url']['6'] = 'نجاح';
$lang['url']['7'] = 'وصلة تنزيل : ';
$lang['url']['8'] = 'ملف الهوية : ';
$lang['url']['9'] = '&quot;صوت على هذا الملف&quot; الرابط: ';
$lang['url']['10'] = 'الوصف: ';
$lang['url']['11'] = 'الباسوورد: ';
$lang['url']['12'] = 'الايبي الخاص بك  ';
$lang['url']['13'] = ' تم تسجيله لاغراض امنية. ';
$lang['url']['14'] = 'رابط حذف الملف';
$lang['url']['15'] = 'اخفاء اكواد BB';
$lang['url']['16'] = 'اظهار اكواد BB';
$lang['url']['17'] = 'للفيديو html اخفاء اكواد';
$lang['url']['18'] = 'للفيديو html اخفاء اكواد';
$lang['url']['19'] = 'تم الرفع بنجاح';
$lang['url']['20'] = 'معاينة الصور المصغرة:';
$lang['url']['21'] = 'نوع الملف:';
$lang['url']['22'] = 'اظهار اكواد BB';
$lang['url']['23'] = 'عرض الصورة للاصدقاء :';
$lang['url']['24'] = 'Hotlink للمنتدى 1:';
$lang['url']['25'] = 'Hotlink للمنتدى 2:';
$lang['url']['26'] = 'صورة مصغره للمنتدى 1: ';
$lang['url']['27'] = 'صورة مصغره للمنتدى 2: ';
$lang['url']['28'] = 'Hotlink لمواقع الويب (HTML): ';
$lang['url']['29'] = 'رابط مباشر للصورة: ';
$lang['url']['30'] = 'تم الرفع!<br />
يرجى الانتظارلايجاد معلومات الملف.';
// END FILE: include/pages/url.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/.php
$lang['upload'] = array(); 
$lang['upload']['1'] = 'الملف كبير جدا. الحجم اكبر من ';
$lang['upload']['2'] = ' ميغابايت';
$lang['upload']['3'] = 'امتداد الملف(';
$lang['upload']['4'] = ') غير مسموح به';
$lang['upload']['5'] = 'لم يتم رفع الملف';
$lang['upload']['6'] = 'إعادة توجيه الى الصفحه الرئيسية';
$lang['upload']['7'] = 'نجاح';
$lang['upload']['8'] = 'وصلة تنزيل : ';
$lang['upload']['9'] = 'ملف الهوية : ';
$lang['upload']['10'] = '&quot;قيم هذا الملف&quot; الوصله : ';
$lang['upload']['11'] = 'الوصف: ';
$lang['upload']['12'] = 'الباسوورد: ';
$lang['upload']['13'] = 'الايبي الخاص بك  ';
$lang['upload']['14'] = ' تم تسجيله لاغراض امنية. ';
$lang['upload']['15'] = 'رابط حذف الملف';
$lang['upload']['16'] = 'حدث خطا اثناء رفع المنف';
$lang['upload']['17'] = 'حجم الملف اكبر من الحجم المسموح به في حسابك.';
$lang['upload']['18'] = 'حدث خطأ غير معروف اثناء رفع الملف.';
$lang['upload']['19'] = 'لا يمكن ربط بروتوكول نقل الملفات الى الخادم. ';
$lang['upload']['20'] = 'فشل تسجيل الدخول الى خادم بروتوكول نقل الملفات ';
$lang['upload']['21'] = 'لا يمكن الحصول على الملف من  الخادم';
$lang['upload']['22'] = 'خطأ غير معروف ';
$lang['upload']['23'] = 'لا يمكن العثور على الملف المؤقت، تاكد من تصاريح المجلد المؤقت';
$lang['upload']['24'] = 'لا يمكن نقل الملف ، تاكد من تصاريح مجلد الملفات';
// END FILE: include/pages/upload.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/addfolder.php
$lang['addfolder'] = array(); 
$lang['addfolder']['1'] = 'انشاء ملف مجلد ';
$lang['addfolder']['2'] = 'تم انشاء المجلد.<br />
';
$lang['addfolder']['3'] = 'العودة لادارة المجلدات';
$lang['addfolder']['4'] = 'معلومات المجلد:';
$lang['addfolder']['5'] = 'اسم المجلد:';
$lang['addfolder']['6'] = 'الرابط لمجلدك:';
$lang['addfolder']['7'] = 'كود هوية مجلدك ID:';
$lang['addfolder']['8'] = 'باسوورد مجلدك:';
$lang['addfolder']['9'] = 'باسوورد مدير مجلدك:';
$lang['addfolder']['10'] = 'ملفات للاضافة، وصلة واحدة كل سطر:';
$lang['addfolder']['11'] = '';
// END FILE: include/pages/addfolder.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/view.php
$lang['view'] = array(); 
$lang['view']['1'] = ' كلمة السر للمجلد ';
$lang['view']['2'] = 'ارسال';
$lang['view']['3'] = 'مجلد : ';
$lang['view']['4'] = 'المالك: ';
$lang['view']['5'] = '&lt;-&lt; لا يوجد وصف &gt;-&gt;';
$lang['view']['6'] = 'تحميل الملف';
$lang['view']['7'] = 'ليس لديك تصريح لمشاهدة المجلد';
$lang['view']['8'] = 'كلمة السر غير صحيحة';
$lang['view']['9'] = 'صاحب المجلد قد وضع كلمة السر لهذا المجلد. <br />الرجاء ادخال كلمة السر لرؤية محتويات المجلدات..';
$lang['view']['10'] = 'الرافع';
$lang['view']['11'] = 'اسم الملف';
$lang['view']['12'] = 'رابط الملف ';
$lang['view']['13'] = 'حالة الملف ';
$lang['view']['14'] = 'اعرض المجلد';
$lang['view']['15'] = 'الرجاء ادخال ID المجلد: ';
$lang['view']['16'] = 'ارسال';
// END FILE: include/pages/view.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/advertising.php
$lang['advertising'] = array(); 
$lang['advertising']['1'] = 'اعلن مع ';
$lang['advertising']['2'] = 'تريد تحقيق مزيد من الزوار الى موقعك؟ حملات الاعلان لدينا توفر لك افضل الخيارات لديك اعلانات يراها الاف الزوار يوميا! ';
$lang['advertising']['3'] = 'روابط نصية :<br />	<strong><span class="style4">الثمن : $15</span><span class="style11"> / الرابط </span><br /> الصلاحية : شهر واحد ';
$lang['advertising']['4'] = '460X60 صورة<br /><strong>Price :</strong> <strong>$20 / صورة</strong><br />
<strong>الصلاحية :</strong> <strong>شهر واحد';
$lang['advertising']['5'] = 'الرجاء <a href="index.php?p=contact">اضغط هنا</a> للاتصال بنا حتى يتسنى لنا ان نرسل اليك رابط  عملية الدفع واكمال ومعلوماتك. ';
$lang['advertising']['6'] = 'بعد الدفع ،  اعلاناتك ستوضع على الموقع فى غضون 3 ساعات. ';
$lang['advertising']['7'] = 'ادعمنا باضافه صورة او وصله الرموز التالية الى موقعك ::';
$lang['advertising']['8'] = ' -- ارفع ملفاتك مجانا! ';
// END FILE: include/pages/advertising.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/delacc.php
$lang['delacc'] = array(); 
$lang['delacc']['1'] = 'تم حذف الحساب بنجاح! ';
$lang['delacc']['2'] = 'ناسف لرايتك تذهب! <br />
 ا تنس هل تريد إلغاء الإشتراك بايبال كذلك. ';
$lang['delacc']['3'] = 'هل انت متأكد من انك تريد حذف حسابك؟';
$lang['delacc']['4'] = 'نعم';
$lang['delacc']['5'] = 'هل أنت متأكد؟ وهذا لا يمكن التراجع ، وأنك سوف تخسر جميع النقاط الخاصة بك';
$lang['delacc']['6'] = 'تأكيد حذف';
// END FILE: include/pages/delacc.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/contactus.php
$lang['contactus'] = array(); 
$lang['contactus']['1'] = 'الدعم';
$lang['contactus']['2'] = 'لدينا فريق دعم العملاء متاح لجميع الاعضاء ، ويمكن الاطلاع عليها من 2am -- 10pm كل يوم عن طريق البريد الالكتروني.';
$lang['contactus']['3'] = 'تم ارسال رسالتك. نتوقع ردا في غضون 24 ساعة ';
$lang['contactus']['4'] = 'يجب ان يكون الاميل حقيقي';
$lang['contactus']['5'] = 'يجب ادخال عنوان للموضوع !';
$lang['contactus']['6'] = 'يجب ادخال نص الرسالة!';
$lang['contactus']['7'] = 'خطأ!';
$lang['contactus']['8'] = 'بريدك الالكتروني:';
$lang['contactus']['9'] = 'البريد الالكتروني الموضوع :';
$lang['contactus']['10'] = 'رسالة بريد الكتروني :';
$lang['contactus']['11'] = 'صورة التحقق :';
$lang['contactus']['12'] = 'وهذا ضروري لمنع اساءة استخدام النظم الاليه من نظامنا لارسال الرسائل المزعجة.';
$lang['contactus']['13'] = 'ارسال بريد الكتروني';
// END FILE: include/pages/contactus.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/.php
$lang['download'] = array(); 
$lang['download']['1'] = 'رابط تحميل الملف غير صالح';
$lang['download']['2'] = 'رابط تحميل الملف خاطء';
$lang['download']['3'] = 'رابط التحميل: ';
$lang['download']['4'] = 'تحميل هذا الملف فورا';
$lang['download']['5'] = 'رابط تحميل الملف خاطء';
$lang['download']['6'] = '.الابي الحالي لا يبطابق مع ابي رابط التحميل';
$lang['download']['7'] = '  اعادة توجيه ، يرجى الانتظار.';
$lang['download']['8'] = 'غير محدود';
$lang['download']['9'] = 'ضيف';
$lang['download']['10'] = 'تم العثور على الملف';
$lang['download']['11'] = ' و جاهز للتحميل ';
$lang['download']['12'] = 'الاسئلة الشائعة';
$lang['download']['13'] = '';
$lang['download']['14'] = '';
$lang['download']['15'] = '';
// END FILE: include/pages/download.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/editp.php
$lang['editp'] = array(); 
$lang['editp']['1'] = 'تم حفظ تفاصيل حسابك ';
$lang['editp']['2'] = 'تحرير تفاصيل حسابك وثم انقر على زر تحديث ادناه.';
$lang['editp']['3'] = 'اسم المستخدم :';
$lang['editp']['4'] = 'كلمة السر الجديدة :';
$lang['editp']['5'] = 'البريد الالكتروني الجديد :';
$lang['editp']['6'] = 'تحديث';
// END FILE: include/pages/editp.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/editimg.php
$lang['editimg'] = array(); 
$lang['editimg']['1'] = 'الملف ';
$lang['editimg']['2'] = '  تم حذفه';
$lang['editimg']['3'] = 'ليس لديك تصريح لحذف الملفات';
$lang['editimg']['4'] = 'ادارة ملفاتك';
$lang['editimg']['5'] = 'الاسم';
$lang['editimg']['6'] = 'مرات التحميل';
$lang['editimg']['7'] = 'حذف؟';
$lang['editimg']['8'] = 'لم يتم العثور على الملف';
$lang['editimg']['9'] = 'ليس لديك تصريح لادارة الملفات';
$lang['editimg']['9'] = 'حالة الملف';
// END FILE: include/pages/editimg.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/.php
$lang['errordl'] = array(); 
$lang['errordl']['1'] = ' تجاوز الباندويث المسموح به للتحميل! </font></strong> <br />
لتحميل اكثر من ذلك ، يجب ان يكون لديك حساب افضل <br /><strong>اعد المحاولة بعد 1 ساعة ';
$lang['errordl']['2'] = 'الرجاء قراءة ';
$lang['errordl']['3'] = 'القوانين';
// END FILE: include/pages/errordl.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/error.php
$lang['error'] = array(); 
$lang['error']['1'] = 'الملف غير موجود </span><br /> لا يمكن العثور على الملف على سرفراتنا ';
$lang['error']['2'] = 'ولذلك عدة اسباب : ';
$lang['error']['3'] = '1.  قد ارسلت شكاوى حول الملف<br /> 2. الملف غير فعال منذ مدة طويلة<br /> 3. تم حذف الملف ';
// END FILE: include/pages/error.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/fastpass.php
$lang['fastpass'] = array(); 
$lang['fastpass']['1'] = 'التسجيل لفتح حساب <br /> تفعيل كل الحسابات فوري';
$lang['fastpass']['2'] = 'لا تستطيع التسجيل؟ <a href="index.php?p=contactus">اتصل بنا</a>. ';
$lang['fastpass']['3'] = 'بمجرد دفعك ، كلمة السر سوف تولد تلقائيا وترسل اليك. الرجاء التحقق من الرسائل الغير مرغوبة، اذا لم تتمكن من العثور على هذا البريد الالكتروني. لا يتم ارسال كلمة مرور دون تأكيد الدفع.';
// END FILE: include/pages/fastpass.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/folder.php
$lang['folder'] = array(); 
$lang['folder']['1'] = 'ادارة المجلدات';
$lang['folder']['2'] = 'مشاهدة';
$lang['folder']['3'] = 'حذف';
$lang['folder']['4'] = 'انشاء مجلد جديد';
$lang['folder']['5'] = 'لإنشاء مجلد جديد اجمع روابط الملفات اللتي تريد اضافتها الى مجلدك. الصق الوصلات واحدة في كل سطر ثم اضغط على مواصلة.';
$lang['folder']['6'] = 'اسم المجلد:';
$lang['folder']['7'] = 'باسوورد المجلد: ';
$lang['folder']['8'] = 'انشاء مجلد';
$lang['folder']['9'] = 'ليس لديك صلاحيات لانشاء مجلد';
$lang['folder']['10'] = '.تم تعديل المجلد<br /><br />
.الرجاء الانتظار.';
$lang['folder']['11'] = 'تعديل المجلد';
$lang['folder']['12'] = 'حذف الملفات';
$lang['folder']['13'] = 'اضافة ملفات';
$lang['folder']['14'] = ' احتفظ بالملف';
$lang['folder']['15'] = ' اضف الملف للمجلد';
$lang['folder']['16'] = 'تحديث';
$lang['folder']['17'] = '... الملف(ات) حذفت';
$lang['folder']['18'] = '... تم تعديل الباسوورد';
$lang['folder']['19'] = ' ... تم اضافة الملفات الجديدة';
$lang['folder']['20'] = '... تم حذف المجلد';
$lang['folder']['21'] = ':ادارة المجلد ';
$lang['folder']['22'] = 'ادارة الملفات بالمجلد';
$lang['folder']['23'] = 'اضافة ملفات جديدة';
$lang['folder']['24'] = 'تغيير كلمة مرور الأدمن';
$lang['folder']['26'] = 'حذف هذا المجلد';
$lang['folder']['27'] = ':تغيير كلمة مرور الأدمن';
$lang['folder']['28'] = ': كلمة مرور الأدمن الجديدة';
$lang['folder']['29'] = ':اضافة ملفات جديدة';
$lang['folder']['30'] = ': ضع روابط الملفات التي تريد اضافتها، وصلة واحدة كل سطر';
$lang['folder']['31'] = 'اضافة ملفات جديدة';
$lang['folder']['32'] = 'تحديث كلمة مرور الأدمن';
$lang['folder']['33'] = ': ادارة الملفات';
$lang['folder']['34'] = 'حذف';
$lang['folder']['35'] = 'رابط الملف';
$lang['folder']['36'] = 'حذف الملفات المختارة';
$lang['folder']['37'] = 'لا يوجد مجلد بالتفاصيل المحددة ';
$lang['folder']['38'] = 'حذف المجلد ';
$lang['folder']['39'] = 'يرجى ادخال كلمة المرور لحذف هذا المجلد';
$lang['folder']['40'] = 'كود هوية المجلد ID: ';
$lang['folder']['41'] = 'كلمة مرور الأدمن: ';
$lang['folder']['42'] = 'حذف المجلد';
$lang['folder']['43'] = 'اضف الملفات للمجلد ';
$lang['folder']['44'] = 'الدخول الى مجلدك ادناه لاضافة الملفات اليها! ';
$lang['folder']['45'] = 'ادارة المجلدات ';
$lang['folder']['46'] = 'الدخول الى مجلدك لادارته ';
$lang['folder']['47'] = 'اضافة ملفات';
$lang['folder']['48'] = 'مجلد الادمن';
$lang['folder']['49'] = 'لديك مجلد؟ ادخل اليه لادارته ';
$lang['folder']['50'] = '';
// END FILE: include/pages/folder.php
####################################
####################################
####################################
/*
// BEGIN FILE: include/pages/flash.php
$lang['flash'] = array(); 
$lang['flash']['1'] = 'نجاح';
$lang['flash']['2'] = ' رابط التنزيل : ';
$lang['flash']['3'] = 'هوية الملف: ';
$lang['flash']['4'] = '&quot;قيم هذا الملف&quot; الرابط: ';
$lang['flash']['5'] = 'الوصف: ';
$lang['flash']['6'] = 'الباسوورد: ';
$lang['flash']['7'] = 'الابي الخاص بك ';
$lang['flash']['8'] = ' تم تسجيله لاغراض امنية ';
$lang['flash']['9'] = ' كانت هناك مشكلة في تحميل الملف. العودة الى الصفحه الرئيسية.';
$lang['flash']['10'] = 'رابط حذف الملف:';
// END FILE: include/pages/flash.php
####################################
####################################
####################################
*/
// BEGIN FILE: include/pages/history.php
$lang['history'] = array(); 
$lang['history']['1'] = 'تاريخ حسابك هو موضح هنا للمستخدم ';
$lang['history']['2'] = 'حالما تنتهي حسابك ، عليك حينئذ اعادة التسجيل من اجل الاستمرار في خدماتنا. ';
$lang['history']['3'] = 'مجموع النقاط المكتسبه المستخدم : ';
$lang['history']['4'] = 'آخر الملف الذى تم تحميله : ';
$lang['history']['5'] = 'حجم الملف بالكيلوبايت : ';
$lang['history']['6'] = 'يجب تسجيل الدخول في الوصول الى تاريخ التحميل';
// END FILE: include/pages/history.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/join.php
$lang['join'] = array(); 
$lang['join']['1'] = '  جديد Premium تسجيل حساب  ';
$lang['join']['2'] = 'الايبي الخاص بك تم تسجيله لاغراض امنية: ';
$lang['join']['3'] = 'يجب قبول القوانين لتسجيل حساب جديد';
$lang['join']['4'] = '.بالضغط على الرجوع للخلف لا يتم تسجيل حساب. تستطيع تعديل معلوماتك من لوحة تحكم المستخدم ';
$lang['join']['5'] = 'القوانين';
$lang['join']['6'] = ' أقبل';
$lang['join']['7'] = ' لا أقبل';
$lang['join']['8'] = 'استمرار';
$lang['join']['9'] = 'يجب قبول القوانين لتسجيل حساب جديد';
// END FILE: include/pages/.php
####################################
####################################
####################################
// BEGIN FILE: include/pages/login.php
$lang['login'] = array(); 
$lang['login']['1'] = 'الدخول  ';
$lang['login']['2'] = 'المستخدم: ';
$lang['login']['3'] = 'الباسوورد';
$lang['login']['4'] = 'فقدت كلمة السر؟?';
$lang['login']['5'] = 'تسجيل حساب جديد';
$lang['login']['6'] = 'المستخدم/كلمة السر غير موجودة بقاعدة بياناتنا، الرجاء التاكد واعادة المحاولة';
$lang['login']['7'] = 'إنتهت صلاحية جلستك<br />
الرجاء اعادة تسجيل الدخول';
$lang['login']['8'] = 'تم تسجيل الدخول بنجاح';
$lang['login']['9'] = 'يتم الان اعادة تحويلك، الرجاء الانتظار.';
// END FILE: include/pages/logout.php
// END FILE: include/pages/login.php
####################################
####################################
####################################
// BEGIN FILE: include/step1.php
$lang['step1'] = array(); 
$lang['step1']['1'] = 'اختر اسم مستخدم:';
$lang['step1']['2'] = 'اختر طريقة الدفع';
$lang['step1']['3'] = 'متابعة';
// END FILE: include/step1.php
####################################
####################################
####################################
// BEGIN FILE: include/step2.php
$lang['step2'] = array(); 
$lang['step2']['1'] = 'Premium عضوية';
// END FILE: include/step2.php
####################################
####################################
####################################
// BEGIN FILE: include/step3.php
$lang['step3'] = array(); 
$lang['step3']['1'] = 'Premium عضوية';
// END FILE: include/step3.php
####################################
####################################
####################################
// BEGIN FILE: include/no_cost.php
$lang['no_cost'] = array(); 
$lang['no_cost']['1'] = 'الاميل مسجل به من قبل، اختر اميل آخر';
$lang['no_cost']['2'] = 'هذا الاسم موجود، الرجاء اختيار اسم آخر';
$lang['no_cost']['3'] = 'كلمة السر غير متطابقة';
$lang['no_cost']['4'] = 'لا مزيد من التسجيلات في هذه المجموعة';
$lang['no_cost']['5'] = '
<h3 align="center">شكرا للتسجيل في موقعنا</h3>
<div align="center">تم انشاء حسابك<br />...الرجاء الانتظار</div>
';
$lang['no_cost']['6'] = 'الرجاء ادخال كلمة السر';
$lang['no_cost']['7'] = 'كلمة السر غير متطابقة';
$lang['no_cost']['8'] = 'الرجاء ادخال اسم اكبر من 6 حروف';
$lang['no_cost']['9'] = 'الرجاء ادخال اميل صحيح';
$lang['no_cost']['10'] = 'المعلومات ';
$lang['no_cost']['11'] = 'اسم المستخدم';
$lang['no_cost']['12'] = 'كلمة السر';
$lang['no_cost']['13'] = 'اعادة كلمة السر';
$lang['no_cost']['14'] = 'البريد الالكتروني ';
$lang['no_cost']['15'] = '  التسجيل  ';
$lang['no_cost']['16'] = 'البريد الالكتروني خاطء، اعد المحاولة';
$lang['no_cost']['17'] = '';
// END FILE: include/no_cost.php
####################################
####################################
####################################
// BEGIN FILE: include/payment/paypal.php
$lang['paypal'] = array(); 
$lang['paypal']['1'] = 'عزيزي المستخدم '."\n\n".' حسابك الخاص ';
$lang['paypal']['2'] = ' تم الموافقة عليه. تفاصيل الدخول بالاسفل.'."\n".'';
$lang['paypal']['3'] = "\n".'اسم المستخدم: ';
$lang['paypal']['4'] = "\n".'كلمة المرور: ';
$lang['paypal']['5'] = '... شكرا لك,'."\n";
$lang['paypal']['6'] = ' Staff';
$lang['paypal']['7'] = '!ادفع الان بالبايبال';
// END FILE: include/payment/paypal.php
####################################
####################################
####################################
// BEGIN FILE: include/payment/authnet.php
$lang['authnet'] = array(); 
$lang['authnet']['1'] = 'عزيزي المستخدم '."\n\n".' حسابك الخاص  ';
$lang['authnet']['2'] = ' تم الموافقة عليه. تفاصيل الدخول بالاسفل.'."\n"."\n";
$lang['authnet']['3'] = "\n".'اسم المستخدم: ';
$lang['authnet']['4'] = "\n".'كلمة المرور: ';
$lang['authnet']['5'] = '... شكرا لك '."\n";
$lang['authnet']['6'] = ' الفريق';
$lang['authnet']['7'] = 'Credit Card رقم';
$lang['authnet']['8'] = ' تاريخ انتهاء الصلاحية';
$lang['authnet']['9'] = 'CVV/Security Code الرمز الامني';
$lang['authnet']['10'] = 'الاسم';
$lang['authnet']['11'] = 'اللقب';
$lang['authnet']['12'] = 'العنوان';
$lang['authnet']['13'] = 'المدينة';
$lang['authnet']['14'] = 'State الولاية';
$lang['authnet']['15'] = 'الرمز البريدي ';
$lang['authnet']['16'] = 'الاميل';
$lang['authnet']['17'] = 'رقم الهاتف';
$lang['authnet']['18'] = 'الدفع بواسطة Credit Card';
$lang['authnet']['19'] = 'صفقة ناجحه. <br />
الرجاء التحقق من بريدك الالكتروني لتفاصيل تسجيل الدخول .';
$lang['authnet']['20'] = 'صفقة فاشله. <br />
الاسباب: ';
$lang['authnet']['21'] = '<br /> يرجى انتظار رسالة بريد الكتروني من الادارة.';
// END FILE: include/payment/authnet.php
####################################
####################################
####################################
// BEGIN FILE: include/payment/2co.php
$lang['2co'] = array(); 
$lang['2co']['1'] = 'عزيزي المستخدم '."\n".' حسابك الخاص ';
$lang['2co']['2'] = ' تم الموافقة عليه. تفاصيل الدخول بالاسفل. '."\n"."\n";
$lang['2co']['3'] = "\n".'اسم المستخدم: ';
$lang['2co']['4'] = "\n".'كلمة المرور: ';
$lang['2co']['5'] = '... شكرا لك'."\n";
$lang['2co']['6'] = ' الفريق';
$lang['2co']['7'] = ' 2CheckOut الدفع بواسطة';
// END FILE: include/payment/2co.php
####################################
####################################
####################################
// BEGIN FILE: include/payment/check.php
$lang['check'] = array(); 
$lang['check']['1'] = ' اشكركم على امر من الاكتتاب ';
$lang['check']['2'] = 'يرجى اتباع التعليمات ادناه لارسال دفعك الينا.';
// END FILE: include/payment/check.php
####################################
####################################
####################################
// BEGIN FILE: /script.php
$lang['script'] = array(); 
$lang['script']['1'] = 'عفوا امتداد الملف المراد رفعه (';
$lang['script']['2'] = ') غير مسموح. اعدالمحاولة.';
$lang['script']['3'] = 'الرجاء اخبيار ملف لرفعه.';
$lang['script']['4'] = 'الرجاء ادخال رابط شغال للرفع منه. ';
// END FILE: /script.php
####################################
####################################
####################################
// BEGIN FILE: /download2.php
$lang['download2'] = array(); 
$lang['download2']['1'] = 'الملف محمي بكلمة سر.<br /> 
الرجاء ادخال كلمة المرور لتستطيع التحميل.';
$lang['download2']['2'] = 'باسوورد الملف ';
$lang['download2']['3'] = 'ادخال';
// END FILE: /download2.php
####################################
####################################
####################################
// BEGIN FILE: /captcha.php
$lang['captcha'] = array(); 
$lang['captcha']['1'] = 'يجب ادخال  ';
$lang['captcha']['2'] = ' </b> ثم الضغط على ادخال لتستطيع رفع/تحميل الملفات';
$lang['captcha']['3'] = 'لا تستطيع القراءة بوضوح؟ ';
$lang['captcha']['4'] = 'ادخال';
$lang['captcha']['5'] = 'تحديث الصورة';
// END FILE: /captcha.php
####################################
####################################
####################################
// BEGIN FILE: ./include/open.functions.inc.php
$lang['open'] = array(); 
$lang['open']['1'] = 'الخصائص';
$lang['open']['2'] = 'الثمن';
$lang['open']['3'] = '!مجاني';
$lang['open']['4'] = 'محدودية التحميل';
$lang['open']['5'] = 'غير محدود';
$lang['open']['6'] = 'ميقا للساعة';
$lang['open']['7'] = 'اقصى حجم';
$lang['open']['8'] = 'مفتوح';
$lang['open']['9'] = 'ميقا';// MB = MegaByte
$lang['open']['10'] = 'ادارة التحميلات متاحة ';
$lang['open']['11'] = 'الرفع بالمتصفح ';
$lang['open']['12'] = 'الرفع باستعمال رابط ';
$lang['open']['13'] = 'الرفع بالفلاش ';
$lang['open']['14'] = 'مشاهدة المجلدات ';
$lang['open']['15'] = 'انشاء مجلدات ';
$lang['open']['16'] = 'ادارة الملفات ';
$lang['open']['17'] = 'صورة التحقق قبل التحميل';
$lang['open']['18'] = 'صورة التحقق في الصفحة الرئيسية';
$lang['open']['19'] = 'الانتهاء ';
$lang['open']['20'] = ' يوم/ايام';
$lang['open']['21'] = ' دائم ';
$lang['open']['22'] = 'ارسال الرابط بالاميل ';
$lang['open']['23'] = 'سرعة التحميل ';
$lang['open']['24'] = 'كيلو بايت بالثانية KBPS';
$lang['open']['25'] = ' مفتوح';
$lang['open']['26'] = 'الحسابات المتبقية';
$lang['open']['27'] = 'مفتوح';
$lang['open']['28'] = 'الحسابات المتبقية';
$lang['open']['29'] = '!التسجيل الان';
$lang['open']['30'] = 'لا يتطلب تسجيل';
$lang['open']['31'] = '  !التسجيل الان';
$lang['open']['32'] = 'نوع الملف ';
$lang['open']['33'] = 'غير ';
$lang['open']['34'] = 'امتداد الملف';
$lang['open']['35'] = 'تحميلات';
$lang['open']['36'] = '!حمل الان';
$lang['open']['37'] = ':مسموح ';

// END FILE: include/open.functions.inc.php
####################################
####################################
####################################
// BEGIN FILE: ./include/functions.inc.php
$lang['functions'] = array(); 
$lang['functions']['1'] = 'الملف غير موجود';
$lang['functions']['2'] = 'الملف تم حذفه';
$lang['functions']['3'] = 'عثر على الملف';
$lang['functions']['4'] = 'ملف محذوف';
$lang['functions']['5'] = '!الملف ازيل';
$lang['functions']['6'] = '!انتهت مدة صلاحية الملف';
$lang['functions']['7'] = 'لم يتم العثور على الملف';
$lang['functions']['8'] = '  لم يتم تحميل اي ملف في جلسة عملك هذه';
$lang['functions']['9'] = '';
// END FILE: ./include/functions.inc.php
####################################
####################################
####################################
// BEGIN FILE: ./download_summary.tpl.php
$lang['download_summary'] = array(); 
$lang['download_summary']['1'] = 'اسم الملف';
$lang['download_summary']['2'] = 'صاحب الملف';
$lang['download_summary']['3'] = 'حجم الملف';
$lang['download_summary']['4'] = 'تحميلات';
$lang['download_summary']['5'] = ' ترافيك مسموح';
$lang['download_summary']['6'] = 'ميقا بالساعة';
$lang['download_summary']['7'] = ' الوصف';
$lang['download_summary']['8'] = 'بتحميلك للملف انت موافق على ';
$lang['download_summary']['9'] = 'قوانيننا';
$lang['download_summary']['10'] = '';
// END FILE: ./download_summary.tpl.php
####################################
####################################
####################################
// BEGIN FILE: ./include/kernel/news.php
$lang['news'] = array(); 
$lang['news']['1'] = 'ارسل(ت) بتاريخ : ';
$lang['news']['2'] = 'من طرف: ';
$lang['news']['3'] = 'اضغط لقراءة المزيد';
$lang['news']['4'] = '';
// END FILE: ./include/kernel/news.php
####################################
####################################
####################################
// BEGIN FILE: ./include/kernel/header.php
$lang['forgotpass'] = array(); 
$lang['forgotpass']['1'] = '! عفوا، لكن اميلك غير موجود بقاعدة بياناتنا. الرجاء اعادة المحاولة';
$lang['forgotpass']['2'] = 'عزيزي ';
$lang['forgotpass']['3'] = 'انك (أو شخص آخر) قام باعادة ضبط كلمة السر الخاصة بك لـ ';
$lang['forgotpass']['4'] = 'اسم المستخدم:';
$lang['forgotpass']['5'] = 'الباسوورد (جديد) ا:';
$lang['forgotpass']['6'] = 'يرجى الاحاطه علما بكلمة السر الجديدة.';
$lang['forgotpass']['7'] = 'لا ترد على هذه الرسالة الالكترونيه';
$lang['forgotpass']['8'] = 'شكرا.';
$lang['forgotpass']['9'] = 'الادارة';
$lang['forgotpass']['10'] = 'تم ارسال الباسوورد الجديد الى اميلك. <br />
الرجاء التحقق من الرسائل المزعجة اذا لم تتمكن من العثور عليه في صندوق البريد الوارد.';
$lang['forgotpass']['11'] = 'اعادة تعيين كلمة المرور';
$lang['forgotpass']['12'] = 'نسيت الباسوورد';
$lang['forgotpass']['13'] = 'الاميل : ';
// END FILE: ./include/kernel/header.php
####################################
####################################
####################################
// BEGIN FILE: ./include/kernel/delfile.php
$lang['delfile'] = array(); 
$lang['delfile']['1'] = '.لم يتم ايجاد الملف';
$lang['delfile']['2'] = 'التحويل لرئيسية الموقع.';
$lang['delfile']['3'] = 'لم يتم ايجاد الملف';
$lang['delfile']['4'] = '... تم حذف الملف بنجاح';
$lang['delfile']['5'] = 'حذف الملف: ';
$lang['delfile']['6'] = '.حسنا، لم يتم حذف ملفك. يتم اعادة توجيهك الى الصفحة الابتدائية';
$lang['delfile']['7'] = '.هل انت متأكد؟ لا يمكن التراجع عن حذف الملف';
$lang['delfile']['8'] = ' نعم، احذف الملف ';
$lang['delfile']['9'] = ' لا، لا تحذف، اني امزح ';
$lang['delfile']['10'] = 'حذف';
$lang['delfile']['11'] = '';
// END FILE: ./include/kernel/delfile.php
####################################
####################################
####################################
// BEGIN FILE: ./include/kernel/comments.php
$lang['comments'] = array(); 
$lang['comments']['1'] = 'الرجاء الانتظار سنقوم باعادة توجيهك الى صفحة تحميل الملف ';
$lang['comments']['2'] = 'تعليقاتك اضيفت!';
$lang['comments']['3'] = 'التعليق اصبح : ';
$lang['comments']['4'] = 'مخفي';
$lang['comments']['5'] = 'غير مخفي';
$lang['comments']['6'] = 'تم حذف التعليق';
$lang['comments']['7'] = 'تم تعديل التعليق';
$lang['comments']['8'] = 'الاسم:';
$lang['comments']['9'] = 'عنوان التعليق:';
$lang['comments']['10'] = 'رابط الموقع:';
$lang['comments']['11'] = 'الاميل::';
$lang['comments']['12'] = 'التعليق:';
$lang['comments']['13'] = 'تعديل التعليق:';
$lang['comments']['14'] = 'مسح الخانات';
$lang['comments']['15'] = 'لم تختر عملية للقيام بها. لا يمكن المتابعة';
$lang['comments']['16'] = '';
// END FILE: ./include/kernel/comments.php
####################################
####################################
####################################
// BEGIN FILE: ./include/kernel/userFolders.php
$lang['userFolders'] = array(); 
$lang['userFolders']['1'] = 'ادارة المجلد ';
$lang['userFolders']['2'] = 'اسم المجلد';
$lang['userFolders']['3'] = 'كود (رابط) المجلد';
$lang['userFolders']['4'] = 'العمليات';
$lang['userFolders']['5'] = 'لا اسم';
$lang['userFolders']['6'] = 'مشاهدة المجلد';
$lang['userFolders']['7'] = 'ادارة المجلد';
$lang['userFolders']['8'] = 'حذف المجلد';
$lang['userFolders']['9'] = '';
// END FILE: ./include/kernel/userFolders.php
####################################
####################################
####################################
// BEGIN FILE: ./include/kernel/usercp.php
$lang['usercp'] = array(); 
$lang['usercp']['1'] = 'لوحة تحكم المستخدم ';
$lang['usercp']['2'] = 'آخر 5 ملفات مرفوعة ';
$lang['usercp']['3'] = 'المعلومات الشخصية ';
$lang['usercp']['4'] = 'المزيد';
$lang['usercp']['5'] = ' احدث 5 ملفات';
$lang['usercp']['6'] = 'احصائياتك الشخصية';
$lang['usercp']['7'] = 'اسم المجلد';
$lang['usercp']['8'] = 'كود (رابط) المجلد';
$lang['usercp']['9'] = 'العمليات';
$lang['usercp']['10'] = 'لا اسم';
$lang['usercp']['11'] = 'المزيد ';
$lang['usercp']['12'] = 'عدد الملفات المرفوعة:';
$lang['usercp']['13'] = 'عدد المجلدات: ';
$lang['usercp']['14'] = 'عدد النقاط:  ';
$lang['usercp']['15'] = 'اجمالي المساحة المستخدمة ';
$lang['usercp']['16'] = 'جميع الملفات';
$lang['usercp']['17'] = 'انشاء مجلد جديد';
$lang['usercp']['18'] = '';
// END FILE: ./include/kernel/usercp.php
####################################
####################################
####################################
// BEGIN FILE: ./include/kernel/rss.php
$lang['rss'] = array(); 
$lang['rss']['1'] = 'RSS فيدات';
$lang['rss']['2'] = '.هنا تجد مجموعة مختارة من الفيدات للملفات المرفوعة';
$lang['rss']['3'] = 'اعلى 10 ملفات المميزه';
$lang['rss']['4'] = 'احدث 10 ملفات مميزه';
$lang['rss']['5'] = 'الملفات المميزة الـ 10 المحملة حديثا';
$lang['rss']['6'] = '';
// END FILE: ./include/kernel/rss.php
####################################
####################################
####################################
// BEGIN FILE: ./include/kernel/report.php
$lang['report'] = array(); 
$lang['report']['1'] = 'تم التبليغ، شكرا لك';
$lang['report']['2'] = 'التبليغ عن الملف';
$lang['report']['3'] = 'للتبليغ عن ملف مخالف الصق الرابط بالاسفل وسنقوم باللازم/ شكرا لك.';
$lang['report']['4'] = 'رابط الملف: ';
$lang['report']['5'] = 'بلغ عن الملف';
$lang['report']['6'] = '';
// END FILE: ./include/kernel/.php
####################################
####################################
####################################
// BEGIN FILE: ./include/kernel/linkchecker.php
$lang['linkchecker'] = array(); 
$lang['linkchecker']['1'] = 'التأكد من تفعيل ملفاتك ';
$lang['linkchecker']['2'] = 'استعمل هذه الخاصية لرؤية حالة ملفاتك.<br />
فقط الصق الروابط بالاسفل / رابط واحد بكل سطر';
$lang['linkchecker']['3'] = 'الروابط المفعلة (العاملة)ء ';
$lang['linkchecker']['4'] = '  من عدد';
$lang['linkchecker']['5'] = 'رابط، المفعلة ';
$lang['linkchecker']['6'] = 'التأكد من روابط اخرى';
$lang['linkchecker']['7'] = 'تأكد';
$lang['linkchecker']['8'] = 'التأكد من روابط اخرى';
$lang['linkchecker']['9'] = '';
// END FILE: ./include/kernel/linkchecker.php
####################################
####################################
####################################
// BEGIN FILE: ./include/kernel/file_upload.php
$lang['file_upload'] = array(); 
$lang['file_upload']['1'] = 'هذا الملف لا يمكن الوصول اليه مباشرة. ';
$lang['file_upload']['2'] = 'BB اخفاء اكواد';
$lang['file_upload']['3'] = 'BB اظهار اكواد';
$lang['file_upload']['4'] = 'الملف موجود من قبل. <br />
هنا تجد المعلومات حول الملف';
$lang['file_upload']['5'] = '';
// END FILE: ./include/kernel/file_upload.php
####################################
####################################
####################################
// BEGIN FILE: ./include/kernel/files.php
$lang['files'] = array(); 
$lang['files']['1'] = 'اختر مجلد لاضافة الملفات';
$lang['files']['2'] = 'الاضافة للمجلد ؟?';
$lang['files']['3'] = 'اضف';
$lang['files']['4'] = 'اضف الملفات للمجلد :';
$lang['files']['5'] = '';
// END FILE: ./include/kernel/files.php
####################################
####################################
####################################
// BEGIN FILE: ./include/kernel/.php
$lang['kernelUpload'] = array(); 
$lang['kernelUpload']['1'] = 'ارفع الملف';
$lang['kernelUpload']['2'] = 'عزيزي ';
$lang['kernelUpload']['3'] = 'انت تتلقى هذا البريد الالكتروني لأن احدهم قام بتحميل ملف وطلب ارسال الرسالة لكم. ';
$lang['kernelUpload']['4'] = 'المعلومات حول الملف:';
$lang['kernelUpload']['5'] = ': الاسم';
$lang['kernelUpload']['6'] = ' : الوصف';
$lang['kernelUpload']['7'] = ' : كلمة المرور';
$lang['kernelUpload']['8'] = ' : رابط التحميل';
$lang['kernelUpload']['9'] = ' : حجم الملـف';
$lang['kernelUpload']['10'] = '...شكرا';
$lang['kernelUpload']['11'] = '-  فريق ';
$lang['kernelUpload']['12'] = ' ';
$lang['kernelUpload']['13'] = 'هذه الرسالة تلقائية ، لاترد على هذا العنوان.';
$lang['']['14'] = '';
$lang['']['15'] = '';
$lang['']['16'] = '';
$lang['']['17'] = '';
$lang['']['18'] = '';
$lang['']['19'] = '';
$lang['']['20'] = '';
$lang['']['21'] = '';
$lang['']['22'] = '';
$lang['']['23'] = '';
$lang['']['24'] = '';
$lang['']['25'] = '';
// END FILE: ./include/kernel/.php
####################################
####################################
####################################
// BEGIN FILE: ./include/kernel/uploadError.php
$lang['uploadError'] = array(); 
$lang['uploadError']['1'] = '... الملف كبير حدا';
$lang['uploadError']['2'] = 'لا يمكن استضافة ملفك على سرفراتنا/ لانه يتعدى الحجم المسموح به';
$lang['uploadError']['3'] = 'يمكنك رفع ملفات كبيــرة بعد ';
$lang['uploadError']['4'] = 'ترقية حسابك';
$lang['uploadError']['5'] = ' أو ';
$lang['uploadError']['6'] = 'تسجيل الدخول';
$lang['uploadError']['7'] = ' لحساب مسجل سابقا';
$lang['uploadError']['8'] = '... لا يمكن الدخول الى الافتيبي بهذه المعلومات';
$lang['uploadError']['9'] = 'خطأ في تسجيل الدخول للافتيبي';
$lang['uploadError']['10'] = '... معلومات الافتيبي التي زودتنا بها عن طريق رابط ملفك غير صحيحة';
$lang['uploadError']['11'] = '! الملف الذي تم رفعه ممنوع في شبكتنا';
$lang['uploadError']['12'] = '! الملف الذي تم رفعه محظور في شبكتنا';
$lang['uploadError']['13'] = 'لقد تلقينا شكاوى من ان الملف الذي قمت بتحميله مخالف لـ ';
$lang['uploadError']['14'] = 'حدث خطأ غير معروف';
$lang['uploadError']['15'] = 'حدث خلل بالنظام ولايمكنك معالجة الامر';
$lang['uploadError']['16'] = 'فريقنا قد اخطر بالوضع وسيتم تصليح الخطأ قريبا..';
$lang['uploadError']['17'] = '';
// END FILE: ./include/kernel/uploadError.php
####################################
####################################
####################################
// BEGIN FILE: ./include/kernel/.php
$lang[''] = array(); 
$lang['']['1'] = '';
$lang['']['2'] = '';
$lang['']['3'] = '';
$lang['']['4'] = '';
$lang['']['5'] = '';
$lang['']['6'] = '';
$lang['']['7'] = '';
$lang['']['8'] = '';
$lang['']['9'] = '';
$lang['']['10'] = '';
$lang['']['11'] = '';
$lang['']['12'] = '';
$lang['']['13'] = '';
$lang['']['14'] = '';
$lang['']['15'] = '';
$lang['']['16'] = '';
$lang['']['17'] = '';
$lang['']['18'] = '';
$lang['']['19'] = '';
$lang['']['20'] = '';
$lang['']['21'] = '';
$lang['']['22'] = '';
$lang['']['23'] = '';
$lang['']['24'] = '';
$lang['']['25'] = '';
// END FILE: ./include/kernel/.php
// MISC Language ( spans multiple pages)
$lang['misc'] = array(); 
$lang['misc']['1'] = 'الصفحة :';
$lang['misc']['2'] = 'اختر الصفحة';
$lang['misc']['3'] = 'الصفحة';
$lang['misc']['4'] = 'عدد النتائج : ';
$lang['misc']['5'] = '';
$lang['misc']['6'] = '';
$lang['misc']['7'] = '';
$lang['misc']['8'] = '';
$lang['misc']['9'] = '';
$lang['misc']['10'] = '';
?>