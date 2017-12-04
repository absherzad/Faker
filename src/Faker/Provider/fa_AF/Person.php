<?php

namespace Faker\Provider\fa_AF;

class Person extends \Faker\Provider\Person
{
    /**
     * @example 'عبدالرحمن شیرزاد'
     * @example 'مهندس عبدالرحمن شیرزاد'
     * @example 'انجنیر عبدالرحمن شیرزاد'
     * @example 'داکتر عبدالرحمن شیرزاد'
     * @example 'آقای عبدالرحمن شیرزاد'
     */
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    );

    /**
     * @example 'فرشته احمدی'
     * @example 'خانم فرشته احمدی'
     * @example 'مهندس فرشته احمدی'
     * @example 'داکترس فرشته احمدی'
     */
    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    );

    /**
     * @source Afghanistan Kankor (University Entrance Exam) 2003-2017 data.
     * The data collected, preprocessed and prepared by Abdul Rahman Sherzad (absherzad@gmail.com).
     * @link https://sites.google.com/view/absherzad/male-names
     * @license: Creative Commons Attribution-ShareAlike License
     */
    protected static $firstNameMale = array(
        "اباسین", "ابراهیم", "ابوبکر", "ابوذر", "اجمل", "احسان الله", "احسان", "احمد ارشاد", "احمد الله", "احمد امید", "احمد بلال", "احمد جاوید", "احمد حامد", "احمد ذکی", "احمد راشد", "احمد رامین", "احمد رضا", "احمد زبیر", "احمد سمیر", "احمد سهیل", "احمد سیر", "احمد شاکر", "احمد شاه", "احمد شبیر", "احمد شعیب", "احمد شکیب", "احمد صمیم", "احمد ضیا", "احمد ضیاء", "احمد طارق", "احمد ظاهر", "احمد قیس", "احمد گل", "احمد مختار", "احمد مسعود", "احمد مسیح", "احمد منصور", "احمد منیر", "احمد میلاد", "احمد ولی", "احمد ولید", "احمد", "احمدالله", "احمدتمیم", "احمدجان", "احمدجاوید", "احمدجواد", "احمدخالد", "احمدخان", "احمدرشاد", "احمدزی", "احمدشاه", "احمدضیا", "احمدعلی", "احمدفرهاد", "احمدفرید", "احمدفهیم", "احمدفواد", "احمدفیاض", "احمدفیصل", "احمدنوید", "اخترمحمد", "ادریس", "ادیب الله", "ارسلان", "ارشاد", "اسحق", "اسد الله", "اسدالله", "اسرار الله", "اسلام الدین", "اسماعیل", "اسمعیل", "اشرف", "اعجازالحق", "اقبال", "اکبر", "اکرام الدین", "اکرام الله", "اکمل", "الفت الله", "الله داد", "الله محمد", "الماس", "الهام الدین", "الهام", "الیاس", "امام الدین", "امان الدین", "امان الله", "امان", "امدادالله", "امرالدین", "امرالله", "امید", "امیدالله", "امیرالله", "امیرخان", "امیرمحمد", "امین الله", "امین", "انصارالله", "انعام الله", "انور", "ایام الدین", "ایمل", 
        "آرش", "آصف", "آغامحمد", 
        "بازمحمد", "باقر", "بخت الله", "بختیار", "برکت الله", "برهان الدین", "بریالی", "بسم الله", "بشرمل", "بشیر احمد", "بشیر", "بصیر", "بصیراحمد", "بکتاش", "بلال احمد", "بلال", "بهاوالدین", "بهرام الدین", "بهرام", "بهروز", "بیت الله", "بیژن", 
        "پاینده محمد", "پرویز", "پیرمحمد", "پیمان", 
        "تاج الدین", "تاج محمد", "تقی", "تمیم", "توحید الله", "توریالی", "توفیق الله", "توفیق", "تیمور شاه", 
        "ثمرالدین", "ثناءالله", "ثناءالله", "ثناءالله", 
        "جان اغا", "جان آغا", "جان محمد", "جاوید احمد", "جاوید", "جاویدالله", "جعفر", "جلال الدین", "جلیل احمد", "جمال الدین", "جمال ناصر", "جمشید", "جمعه الدین", "جمعه خان", "جمعه گل", "جمیل الرحمن", "جمیل", "جنت گل", "جهان زیب", "جواد", 
        "حاجی محمد", "حارث", "حامد", "حامدالله", "حبیب الرحمن", "حبیب الله", "حبیب", "حجت الله", "حزب الله", "حسام الدین", "حسن علی", "حسن", "حسیب الله", "حسین داد", "حسین علی", "حسین", "حشمت الله", "حضرت الله", "حضرت بلال", "حضرت محمد", "حضرت ولی", "حفیظ الله", "حکمت الله", "حکیم الله", "حمایت الله", "حمدالله", "حمید", "حمیدالله", "حمیدالله", "حنیف الله", "حیات الله", "حیدر", 
        "خال الدین", "خال محمد", "خالد احمد", "خالد", "خان آغا", "خان محمد", "خان ولی", "خداداد", "خدایداد", "خسرو", "خلیل احمد", "خلیل الرحمن", "خلیل الله", "خلیل", "خوشحال خان", "خیال محمد", "خیبر", "خیرالدین", "خیرالله", "خیرمحمد", 
        "دادالله", "دادمحمد", "داود", "درمحمد", "دل آغا", "دلاور", "دوست محمد", "دین محمد", 
        "ذاکر حسین", "ذاکرالله", "ذاهدالله", "ذبیح الله", "ذکرالله", "ذکریا", "ذکی الله", "ذکی", "ذین الله", 
        "رازمحمد", "راشد", "رامش", "رامین", "ربیع الله", "رجب علی", "رحم الدین", "رحمان الله", "رحمت الله", "رحمن الله", "رحمن", "رحیم الله", "رستم", "رسول خان", "رشاد", "رضا", "رضوان الله", "رفیع الله", "رفیق الله", "رمضان", "روح الله", "رومان", "رومل", "ریاض الله", 
        "زاهد", "زاهدالله", "زبیح الله", "زبیدالله", "زبیر", "زبیراحمد", "زریالی", "زلمی", "زمان الدین", "زمان", "زمری", "زیارمل", "زین الدین", "زین الله", 
        "ساحل", "سباوون", "سبحان الله", "سجاد", "سخی محمد", "سخیداد", "سراج الدین", "سردار محمد", "سردار ولی", "سردار", "سرور", "سعدالله", "سعیدالله", "سکندر", "سلطان احمد", "سلطان محمد", "سلطان", "سلمان", "سلیم", "سلیمان", "سمسور", "سمع الله", "سمیر", "سمیراحمد", "سمیع الحق", "سمیع الله", "سنگر", "سهراب", "سهیل", "سید ابراهیم", "سید اکبر", "سید امین", "سید آغا", "سید جاوید", "سید حبیب الله", "سید ذبیح الله", "سید رضا", "سید روح الله", "سید عالم", "سید عمر", "سید محمود", "سید مسعود", "سید مصطفی", "سید منصور", "سید مهدی", "سید ناصر", "سید نجیب الله", "سید هارون", "سید ولی", "سیداحمد", "سیدالرحمن", "سیدالله", "سیدامیر", "سیدآغا", "سیدجعفر", "سیدجلال", "سیدجواد", "سیدحامد", "سیدحبیب", "سیدحسن", "سیدحسین", "سیدرحمن", "سیدرحیم", "سیدعارف", "سیدعباس", "سیدعبدالله", "سیدعلی", "سیدکریم", "سیدمجتبی", "سیدمحمد", "سیدمرتضی", "سیف الدین", "سیف الرحمن", "سیف الله", 
        "شاپور", "شاداب", "شاکر", "شاکرالله", "شاه پور", "شاه محمد", "شاه محمود", "شاه ولی", "شاهدالله", "شاهین", "شبیراحمد", "شجاع الدین", "شراف الدین", "شرافت", "شرف الدین", "شریف الله", "شریف", "شعیب الله", "شعیب", "شفیع الله", "شفیق الله", "شفیق", "شکرالله", "شکیب", "شمس الحق", "شمس الدین", "شمس الرحمن", "شمس الله", "شمشاد", "شهاب الدین", "شهرام", "شهیدالله", "شوکت الله", "شوکت", "شیر آغا", "شیر حسین", "شیراحمد", "شیرالله", "شیرآغا", "شیرآقا", "شیرخان", "شیرزاد", "شیرزی", "شیرشاه", "شیرعلی", "شیرمحمد", 
        "صابر", "صادق", "صالح محمد", "صبرالله", "صبغت الله", "صحبت الله", "صداقت", "صدام حسین", "صدام", "صدرالدین", "صدیق الله", "صفت الله", "صفی الله", "صلاح الدین", "صمیم", 
        "ضمیر", "ضیاءالحق", "ضیاءالحق", "ضیاالحق", "ضیاالدین", "ضیاالرحمن", "ضیاالله", "ضیاوالدین", 
        "طارق", "طاهر", "طوفان", 
        "ظاهر شاه", "ظاهر", "ظفر خان", 
        "عابد", "عابدالله", "عادل", "عارف الله", "عارف", "عاشق الله", "عبادالله", "عباس", "عبدالاحد", "عبدالاحمد", "عبدالباری", "عبدالباسط", "عبدالباعث", "عبدالباقی", "عبدالبشیر", "عبدالبصیر", "عبدالتواب", "عبدالجبار", "عبدالجلیل", "عبدالجمیل", "عبدالحامد", "عبدالحبیب", "عبدالحسیب", "عبدالحسین", "عبدالحفیظ", "عبدالحق", "عبدالحکیم", "عبدالحلیم", "عبدالحمید", "عبدالحنان", "عبدالحی", "عبدالخالد", "عبدالخالق", "عبدالخبیر", "عبدالخلیل", "عبدالرازق", "عبدالرب", "عبدالرحمن", "عبدالرحیم", "عبدالرزاق", "عبدالرسول", "عبدالرشید", "عبدالرقیب", "عبدالروف", "عبدالستار", "عبدالسلام", "عبدالسلیم", "عبدالسمیع", "عبدالشکور", "عبدالصبور", "عبدالصمد", "عبدالصمیم", "عبدالطیف", "عبدالظاهر", "عبدالظهور", "عبدالعزیز", "عبدالعظیم", "عبدالعلی", "عبدالعلیم", "عبدالغفار", "عبدالغفور", "عبدالغنی", "عبدالغیور", "عبدالفتاح", "عبدالفرید", "عبدالفهیم", "عبدالفواد", "عبدالقادر", "عبدالقاهر", "عبدالقدوس", "عبدالقدیر", "عبدالقدیم", "عبدالقهار", "عبدالقیوم", "عبدالکبیر", "عبدالکریم", "عبداللطیف", "عبدالله", "عبدالمالک", "عبدالمبین", "عبدالمتین", "عبدالمجیب", "عبدالمجید", "عبدالمحمد", "عبدالمصور", "عبدالمطلب", "عبدالمعروف", "عبدالمقیم", "عبدالملک", "عبدالمنان", "عبدالمنصور", "عبدالمنیر", "عبدالمومن", "عبدالناصر", "عبدالنصیر", "عبدالهادی", "عبدالواجد", "عبدالواحد", "عبدالوارث", "عبدالواسع", "عبدالواسیع", "عبدالوحید", "عبدالودود", "عبدالوکیل", "عبدالولی", "عبدالوهاب", "عبیدالرحمن", "عبیدالله", "عبیدالله", "عتیق الله", "عثمان", "عجب خان", "عرفان الله", "عزت الله", "عزیز الله", "عزیز", "عزیزاحمد", "عزیزالرحمن", "عزیزالله", "عصمت الله", "عطاءالله", "عطاالرحمن", "عطاالله", "عطامحمد", "عطاوالله", "عظیم الله", "علاوالدین", "علی احمد", "علی اصغر", "علی اکبر", "علی جان", "علی حسین", "علی خان", "علی داد", "علی رضا", "علی سینا", "علی شاه", "علی محمد", "علی", "عمادالدین", "عمر", "عمران الله", "عمران", "عنایت الرحمن", "عنایت الله", "عوض علی", "عوض", "عیدمحمد", "عیدی محمد", "عیسی خان", "عین الدین", "عین الله", 
        "غلام حسن", "غلام حسین", "غلام حضرت", "غلام حیدر", "غلام ربانی", "غلام رسول", "غلام رضا", "غلام سخی", "غلام سرور", "غلام صدیق", "غلام عباس", "غلام علی", "غلام فاروق", "غلام مجتبی", "غلام محمد", "غلام محی الدین", "غلام مرتضی", "غلام مصطفی", "غلام نبی", "غلام یحیی", "غلام یحیی", "غوث الدین", "غیاث الدین", 
        "فاروق", "فتح الله", "فخرالدین", "فدامحمد", "فرامرز", "فردوس", "فردین", "فرزاد", "فرشاد", "فرشید", "فرمان الله", "فرهاد", "فرهادالله", "فرید احمد", "فرید", "فریداحمد", "فریدالله", "فریدون", "فضل احمد", "فضل الحق", "فضل الدین", "فضل الربی", "فضل الرحمن", "فضل الرحیم", "فضل الله", "فضل محمد", "فهیم الله", "فهیم", "فواد احمد", "فواد", "فیاض", "فیروز", "فیروزاحمد", "فیروزالدین", "فیصل", "فیض احمد", "فیض الدین", "فیض الرحمن", "فیض الله", "فیض محمد", 
        "قاسم", "قدرت الله", "قربان علی", "قربان علی", "قربان", "قطب الدین", "قمرالدین", "قند آغا", "قندآغا", "قیام الدین", "قیس", 
        "کاظم", "کامران", "کرامت الله", "کریم الله", "کریم", "کفایت الله", "کلیم الله", "کمال الدین", 
        "گل احمد", "گل الرحمن", "گل آغا", "گل آغا", "گل رحمن", "گل محمد", "گل ولی", "گلاب الدین", "گلبدالدین", "گلبدین", 
        "لطف الرحمن", "لطف الله", "لطیف الله", "لعل محمد", "لیاقت", 
        "مبارز", "مبارک شاه", "مجاهد", "مجتبی", "مجیب الرحمن", "مجیب الله", "محب الرحمن", "محب الله", "محبت الله", "محبوب الله", "محبوب", "محراب الدین", "محسن", "محفوظ الله", "محمد ابراهیم", "محمد اجمل", "محمد ادریس", "محمد اسحاق", "محمد اسحق", "محمد اسلام", "محمد اغا", "محمد اکبر", "محمد اکرام", "محمد الله", "محمد الیاس", "محمد امید", "محمد امیر", "محمد امین", "محمد ایوب", "محمد آصف", "محمد بصیر", "محمد بلال", "محمد تقی", "محمد توفیق", "محمد جان", "محمد جاوید", "محمد جعفر", "محمد حسیب", "محمد حسین", "محمد خالد", "محمد خلیل", "محمد داود", "محمد دین", "محمد ذاکر", "محمد ذکریا", "محمد رضا", "محمد رفیع", "محمد زاهد", "محمد زبیر", "محمد سالم", "محمد سرور", "محمد سعید", "محمد سلیمان", "محمد سمیر", "محمد سمیع", "محمد شبیر", "محمد شریف", "محمد شکیب", "محمد صدیق", "محمد صمیم", "محمد ضیا", "محمد طارق", "محمد طیب", "محمد ظفر", "محمد عادل", "محمد عارف", "محمد عباس", "محمد عظیم", "محمد علم", "محمد علی", "محمد عمران", "محمد عوض", "محمد فاضل", "محمد فهیم", "محمد فیاض", "محمد فیروز", "محمد قسیم", "محمد قیس", "محمد لطیف", "محمد مبین", "محمد مجتبی", "محمد محسن", "محمد مختار", "محمد مرتضی", "محمد مسعود", "محمد مسلم", "محمد معروف", "محمد معصوم", "محمد منصور", "محمد منیر", "محمد موسی", "محمد نادر", "محمد ناصر", "محمد ندیم", "محمد نسیم", "محمد نعیم", "محمد نواب", "محمد نوید", "محمد هارون", "محمد هارون", "محمد همایون", "محمد وسیم", "محمد ولی", "محمد ویس", "محمد یاسر", "محمد یحیی", "محمد یوسف", "محمد", "محمدابراهیم", "محمداحسان", "محمدادریس", "محمداسلم", "محمداسماعیل", "محمداسمعیل", "محمداشرف", "محمداصف", "محمداعظم", "محمدافضل", "محمداقبال", "محمداکرم", "محمدالدین", "محمدالله", "محمدامان", "محمدامین", "محمدانور", "محمدایمل", "محمدآصف", "محمدآغا", "محمدباقر", "محمدبشیر", "محمدتمیم", "محمدجاوید", "محمدجمشید", "محمدجمعه", "محمدجمیل", "محمدجواد", "محمدحارث", "محمدحامد", "محمدحسن", "محمدحسین", "محمدحکیم", "محمدحلیم", "محمدحنیف", "محمدخالد", "محمدخان", "محمدداود", "محمدذکی", "محمدراشد", "محمدرامین", "محمدرحیم", "محمدرسول", "محمدرضا", "محمدرفیع", "محمدرفیق", "محمدزمان", "محمدسلیم", "محمدشاکر", "محمدشاه", "محمدشریف", "محمدشعیب", "محمدشفیع", "محمدشفیق", "محمدصابر", "محمدصادق", "محمدصالح", "محمدصبور", "محمدضمیر", "محمدطاهر", "محمدظاهر", "محمدظریف", "محمدعابد", "محمدعارف", "محمدعالم", "محمدعثمان", "محمدعزیز", "محمدعلی", "محمدعمر", "محمدعیسی", "محمدفاروق", "محمدفرهاد", "محمدفرید", "محمدفهیم", "محمدفواد", "محمدفیصل", "محمدقاسم", "محمدکاظم", "محمدکبیر", "محمدکریم", "محمدگل", "محمدمصطفی", "محمدمهدی", "محمدن ظیف", "محمدناصر", "محمدنبی", "محمدنذیر", "محمدنسیم", "محمدنصیر", "محمدنعمان", "محمدنعیم", "محمدنور", "محمدهادی", "محمدهاشم", "محمدیاسین", "محمدیعقوب", "محمدیوسف", "محمدیونس", "محمود", "محی الدین", "محیب الله", "مختار", "مختاراحمد", "مدثر", "مرتضی", "مزمل", "مسعود", "مسلم", "مسیح الله", "مشتاق احمد", "مشتاق", "مشعل", "مصطفی", "مصور", "مطیع الله", "معراج الدین", "معروف", "معشوق", "مقصود", "ملیار", "ممتاز", "منصور احمد", "منصور", "منیر", "منیراحمد", "مهدی", "مهرالله", "موسی خان", "موسی", "مول الدین", "میثم", "میر احمد", "میرآغا", "میرحمزه", "میرزا محمد", "میرویس", "میلاد", "میوند", 
        "نادر شاه", "نادر", "ناصر احمد", "ناصر", "ناصرخان", "نبی الله", "نثار احمد", "نثاراحمد", "نجم الدین", "نجیب الرحمن", "نجیب الله", "نذیراحمد", "نسیم الله", "نسیم", "نصرالدین", "نصرالله", "نصرت الله", "نصیب الله", "نصیر احمد", "نصیراحمد", "نصیرالله", "نظام الدین", "نظر محمد", "نظیف الله", "نعمان", "نعمت الله", "نعیم الله", "نعیم", "نقیب الله", "ننگیالی", "نور آغا", "نوراحمد", "نورالحق", "نورالدین", "نورالرحمن", "نورالله", "نورآغا", "نورعلی", "نورمحمد", "نوروز علی", "نوروز", "نوید", "نویداحمد", "نویدالله", "نیاز محمد", "نیک محمد", 
        "هادی", "هارون", "هجرت الله", "هدایت الله", "هلال الدین", "هلال", "همایون", "همت الله", "هیواد", 
        "واحد الله", "وارث", "وحدت الله", "وحید احمد", "وحید الله", "وحید", "وحیدالله", "وزیراحمد", "وسیع الله", "وسیم", "وفی الله", "وکیل احمد", "ولی الله", "ولی خان", "ولی محمد", "ولید", "ویس الدین", "ویس الله", "ویس", 
        "یار محمد", "یاسر", "یاسین", "یحیی", "یما", "یوسف", "یونس"
    );

    /**
     * @source Afghanistan Kankor (University Entrance Exam) 2003-2017 data.
     * The data collected, preprocessed and prepared by Abdul Rahman Sherzad (absherzad@gmail.com).
     * @link https://sites.google.com/view/absherzad/female-names
     * @license: Creative Commons Attribution-ShareAlike License
     */
    protected static $firstNameFemale = array(
        "ادیبا", "ادیبه", "ارزو", "ارغوان", "اریا", "ازاده", "ازیتا", "استوری", "اسرا", "اسما", "اسماء", "اسیه", "اصفه", "اصیلا", "افسانه", "افسون", "افغان گل", "اقلیما", "الاهه", "المیرا", "الناز", "الهام", "الهامه", "الهه", "الینا", "ام البنین", "امنه", "امیده", "امیلا", "امینه", "انار گل", "اناهیتا", "انایتا", "انجلا", "انجیلا", "اندیشه", "انسیه", "انگیزه", "انوشه", "انیتا", "انیس گل", "انیسگل", "انیسه", "انیلا", "اورانوس", "اوستا", 
        "آدینه", "آرزو", "آریا", "آریانا", "آرین", "آزاده", "آزیتا", "آسیه", "آصفه", "آمنه", "آمینه", 
        "بادام گل", "باصره", "بانو", "بتول", "بختاور", "بدریه", "برشنا", "برگ گل", "برنا", "بریشنا", "بس بی بی", "بس گل", "بس مینه", "بسگل", "بسمینه", "بسیمه", "بسینا", "بسیه", "بشرا", "بشیره", "بصیره", "بلقیس", "بلقیسه", "بنفشه", "بنین", "بهار", "بهاره", "بهشته", "بهناز", "بوبانی", "بومانه", "بی بی اسما", "بی بی امنه", "بی بی امینه", "بی بی انیسه", "بی بی آرزو", "بی بی آسیه", "بی بی آمنه", "بی بی آمینه", "بی بی بصیره", "بی بی پروانه", "بی بی تمنا", "بی بی ثریا", "بی بی جان", "بی بی جمیله", "بی بی حاجره", "بی بی حبیبه", "بی بی حسنا", "بی بی حسینه", "بی بی حکیمه", "بی بی حلیمه", "بی بی حمیده", "بی بی حمیرا", "بی بی حنیفه", "بی بی حوا", "بی بی خاطره", "بی بی خالده", "بی بی خدیجه", "بی بی ذکیه", "بی بی رابعه", "بی بی راحله", "بی بی راضیه", "بی بی رحیمه", "بی بی رقیه", "بی بی ریحانه", "بی بی زحل", "بی بی زرمینه", "بی بی زهرا", "بی بی زهره", "بی بی زیبا", "بی بی زینب", "بی بی سارا", "بی بی ساره", "بی بی سعدیه", "بی بی سعیده", "بی بی سکینه", "بی بی سلیمه", "بی بی سمیرا", "بی بی سمیه", "بی بی شازیه", "بی بی شبانه", "بی بی شبنم", "بی بی شریفه", "بی بی شفیقه", "بی بی شکریه", "بی بی شگوفه", "بی بی صابره", "بی بی صالحه", "بی بی صدف", "بی بی صدیقه", "بی بی صفیه", "بی بی طاهره", "بی بی طیبه", "بی بی ظریفه", "بی بی عابده", "بی بی عادله", "بی بی عاطفه", "بی بی عالیه", "بی بی عایشه", "بی بی عزیزه", "بی بی فاطمه", "بی بی فرزانه", "بی بی فرشته", "بی بی فریبا", "بی بی فریده", "بی بی فهیمه", "بی بی فوزیه", "بی بی فیروزه", "بی بی کامله", "بی بی کبرا", "بی بی کریمه", "بی بی گل", "بی بی لطیفه", "بی بی لینا", "بی بی مدینه", "بی بی مرسل", "بی بی مرضیه", "بی بی مروه", "بی بی مریم", "بی بی مژده", "بی بی مژگان", "بی بی مسعوده", "بی بی معصومه", "بی بی ملکه", "بی بی ملیحه", "بی بی منیژه", "بی بی ناجیه", "بی بی نادیه", "بی بی ناز", "بی بی نازیه", "بی بی ناهیده", "بی بی نبیلا", "بی بی نجیبه", "بی بی نرگس", "بی بی نسیمه", "بی بی نظیفه", "بی بی نفیسه", "بی بی نگینه", "بی بی نوریه", "بی بی هاجره", "بی بی هما", "بی بی هوا", "بی بی وحیده", "بی بی یلدا", "بی نظیر", "بیگم", "بینظیر", 
        "پاکیزه", "پتونی", "پرستو", "پرسیلا", "پرمیلا", "پرمینه", "پرنیان", "پروانه", "پروین گل", "پروین", "پروینه", "پری گل", "پری ناز", "پری", "پریسا", "پریگل", "پریما", "پریناز", "پریوش", "پشتنه", "پشتون", "پلواشه", "پلوشه", "پیکی", "پیمانه", 
        "تاجور", "تازه گل", "تانیا", "تبسم", "تجلا", "ترانه", "ترینا", "تمکین", "تمنا", "تمینه", "تهمینه", "توبا", "تورپیکی", 
        "ثریا", "ثمرگل", "ثمیرا", "ثمینه", "ثنا", "ثویبه", 
        "جاهده", "جاویده", "جلوه", "جلیله", "جمیله", "جهانتاب", "جواهر", "جیلا", "جینا", 
        "چمن گل", "چمن", 
        "حاجره", "حافظه", "حامده", "حامیه", "حبیبه", "حدیثه", "حدیقه", "حریره", "حسنا", "حسنی", "حسنیه", "حسیبا", "حسیبه", "حسینا", "حسینه", "حفصه", "حفیظه", "حکیمه", "حلیمه", "حماسه", "حمیده", "حمیرا", "حنا", "حنیفه", "حوا گل", "حوا", "حوریه", 
        "خاتمه", "خاتول", "خاطره", "خال بی بی", "خالده", "خالصه", "خالیده", "ختیمه", "خجسته", "خدیجه", "خماری", "خورشید", "خوشبو", "خیرالنسا", "خیریه", 
        "دانش", "درخشان", "دل افروز", "دنیا", "دیانا", "دیبا", "دینا", "دیوه", 
        "ذاکره", "ذبیحه", "ذحل", "ذکریه", "ذکیه", "ذلفیه", "ذلیخا", 
        "رابعه", "راحله", "راحیله", "راشده", "راضیه", "رافعه", "راکعه", "راکیه", "رامشه", "رامیکا", "رامینا", "ربابه", "رحمانه", "رحیمه", "رخسار", "رخساره", "رخشانه", "رزما", "رزماه", "رشیده", "رضوان", "رضوانه", "رعنا", "رعناگل", "رقیبه", "رقیه", "رمزیه", "رنا", "رنگینه", "روبابه", "روبینا", "روبینه", "روح افزا", "روحینا", "روحیه", "رودابه", "روزیتا", "روزینا", "روشن گل", "روشن", "روشنا", "روضیه", "روفه", "روقیه", "روما", "رومان", "رومینا", "رونا", "روهینا", "رویا گل", "رویا", "رویدا", "روینا", "ریتا", "ریحان", "ریحانه", "ریزه گل", "ریسه", "ریکا", "ریما", "رینا", "رئیسه", 
        "زاهده", "زبیده", "زحل", "زر افشان", "زربی بی", "زرغونه", "زرفشان", "زرگی", "زرلشت", "زرمینه", "زرنگار", "زرین گل", "زرین", "زرینا", "زرینه", "زکیه", "زلفیه", "زلیخا", "زمرد", "زمزمه", "زهر اگل", "زهرا", "زهراء", "زهراه", "زهره", "زهل", "زویا", "زیاده", "زیب النسا", "زیبا", "زیباگل", "زیتون", "زیتونه", "زینب", "زینت", "زینوره", "زیور", 
        "ژیلا", 
        "ساجده", "سارا", "ساره", "ساغر", "سالمه", "سامره", "سامعه", "سامیه", "ساناز", "سایره", "سایمه", "سبزه گل", "سبزه", "سبزینه", "سبنا", "سبیکه", "سپنا", "سپوږمی", "سپوژمی", "سپیده", "ستاره", "ستوری", "سجیه", "سحر", "سحرگل", "سدره", "سعادت", "سعدیه", "سعیده", "سکینه", "سلسله", "سلطانه", "سلگی", "سلما", "سلوا", "سلیمه", "سما", "سمانه", "سمن", "سمیرا", "سمیره", "سمیعه", "سمیلا", "سمین گل", "سمین", "سمینا", "سمینه", "سمیه", "سنبل", "سنگی ماه", "سنیتا", "سنیه", "سهلا", "سهیلا", "سودابه", "سوریا", "سوریه", "سوسن", "سوما", "سومن", "سومیه", "سونا", "سونم", "سونیا", "سونیتا", "سونیلا", "سویتا", "سویدا", "سویلا", "سیاره", "سیاموی", "سیاه موی", "سیتا", "سیده", "سیلی", "سیما گل", "سیما", "سیماگل", "سیماه", "سیمین گل", "سیمین", "سینا", 
        "شاپیری", "شازیه", "شاعره", "شافعه", "شاکره", "شامله", "شاه بی بی", "شاه پری", "شاه پیری", "شاه جان", "شاه گل", "شاهده", "شایسته", "شایقه", "شبانه", "شبنم", "شراره", "شرافت", "شرمیلا", "شریفه", "شرین گل", "شرین", "شغله", "شفیقه", "شقایق", "شکرانه", "شکریه", "شکوفه", "شکیبا", "شکیباه", "شکیلا", "شکیلاه", "شگوفه", "شمایل", "شمسی", "شمسیه", "شمشاد", "شمله", "شمیسا", "شمیلا", "شمیم", "شمیمه", "شمین", "شمینه", "شهربانو", "شهره", "شهزاده", "شهلا", "شهناز", "شهیده", "شهیره", "شهیلا", "شیبا", "شیدا", "شیرین گل", "شیرین", "شیلا", "شیما گل", "شیما", "شیماه", "شیوا", 
        "صابره", "صاحبه", "صادقه", "صالحه", "صایمه", "صائمه", "صبرگل", "صبرینا", "صبرینه", "صبریه", "صبیه", "صحرا", "صدف", "صدیقه", "صغرا", "صغری", "صفا", "صفرا", "صفورا", "صفیه", "صمیمه", "صنم", "صنوبر", "صوفیا", "صوفیه", "صیفوره", 
        "ضمیره", "ضیا گل", "ضیاء گل", "ضیاگل", 
        "طاهره", "طاوس", "طوبا", "طوبی", "طیبه", 
        "ظاهره", "ظریفه", 
        "عابده", "عاتکه", "عادله", "عارفه", "عاصمه", "عاطفه", "عاطیفه", "عاقله", "عاقیله", "عالمه", "عالیه", "عایده", "عایشه", "عبیده", "عتیقه", "عذرا", "عزرا", "عزیزگل", "عزیزه", "عطیه", "عظمی", "عظیمه", "عفیفه", "عقیله", "علیا", "علینا", "عهدیه", "عیدیه", 
        "غزال", "غزاله", "غزل", "غنچه گل", "غوتی", 
        "فاخره", "فاضله", "فاضیله", "فاطمه", "فایزه", "فایضه", "فایقه", "فائزه", "فتانه", "فخریه", "فدیه", "فرانگیز", "فرح دیبا", "فرح ناز", "فرح", "فرحت", "فرحناز", "فرخ لقا", "فرخ", "فرخنده", "فردینا", "فرزانه", "فرشته", "فرضیه", "فرنگیز", "فرنگیس", "فرنوش", "فرهناز", "فرهنگیز", "فروزان", "فروزه", "فروغ", "فروه", "فروهر", "فریال", "فریبا", "فریباه", "فریحه", "فریده", "فریضه", "فریما", "فرینا", "فریه", "فضه", "فضیله", "فلک ناز", "فلورانس", "فهمیه", "فهیمه", "فوزیه", "فیروزان", "فیروزه", "فیضه", 
        "قاهره", "قدریه", "قدسیه", "قدیره", "قطبیه", "قمر", "قمرگل", "قندی گل", "قندیگل", 
        "کامله", "کامیله", "کاینات", "کبرا", "کبری", "کبریا", "کبیتا", "کتایون", "کرشمه", "کریمه", "کشور", "کلثوم", "کوثر", "کوکبه", "کیمیا گل", "کیمیا", 
        "گرانه", "گل افروز", "گل افشان", "گل اندام", "گل بخت", "گل بهار", "گل بی بی", "گل بیگم", "گل پری", "گل پیدا", "گل جان", "گل چمن", "گل چهره", "گل دسته", "گل زیور", "گل سیمه", "گل شاه", "گل غتی", "گل غوتی", "گل مکی", "گل مینه", "گل ناز", "گل نسا", "گلالی", "گلثوم", "گلثومه", "گلچهره", "گلدانه", "گلدسته", "گلستان", "گلسوم", "گلشاه", "گلشن", "گلنار", "گلناز", "گوزل", "گوهر", "گیتا", "گیتی", "گیسو", 
        "لاجورد", "لاله", "لامعه", "لامیه", "لایقه", "لطیفه", "لیدا", "لیذا", "لیزا", "لیلا", "لیلما", "لیلماه", "لیلی ماه", "لیلی", "لیما", "لیمه", "لینا", 
        "ماجبین", "ماری", "ماریا", "مارینا", "ماریه", "مانیلا", "ماه بیگم", "ماه پری", "ماه جان", "ماه جبین", "ماه رخ", "ماه گل", "ماه گل", "ماهره", "مایله", "مبارک", "مبارکه", "مبینه", "مجاهده", "مجیبه", "محاربه", "محبت", "محبه", "محبوبه", "محجوبه", "محدثه", "محسنه", "محسینه", "محفوظه", "محموده", "مدیحه", "مدینه", "مدیه", "مرجان", "مرحبا", "مرحمه", "مرزیلا", "مرسل", "مرضیلا", "مرضیه", "مرغلره", "مرغلی", "مرغوبه", "مرمر", "مروارید", "مروه", "مروه", "مریم", "مرینا", "مزاری", "مژده", "مژگان", "مستوره", "مسعوده", "مسکا", "مسلمه", "مسلیمه", "مسیحه", "مشتری", "مشعل", "مطهره", "معرفه", "معروفه", "معشوقه", "معصومه", "معظمه", "مقبوله", "مقدس", "مقدسه", "مکرمه", "مکی", "مکیه", "ملالی", "ملکه", "ملیحه", "ملیکه", "ملیلا", "ملینا", "ملیه", "ممتاز", "مملکت", "منزه", "منصوره", "منظوره", "منور", "منوره", "منیجه", "منیره", "منیژه", "منیکا", "منیلا", "مهاجره", "مهتاب", "مهدیه", "مهر افزون", "مهرانگیز", "مهری", "مهریه", "مهسا", "مهشید", "مهناز", "مهوش", "موجوده", "مولوده", "مومنه", "مومینه", "مونسه", "مونیسه", "مونیکا", "میترا", "میده گل", "میسره", "میمونه", "مینا", "میناگل", "مینه", 
        "ناجیه", "نادره", "نادیا", "نادیه", "نارون", "نازدانه", "نازگل", "نازله", "نازنین", "نازو", "نازی گل", "نازی", "نازیتا", "نازیلا", "نازیه", "ناصره", "ناظره", "ناظمه", "ناهده", "ناهید", "ناهیده", "نایله", "نبیلا", "نبیله", "نتاشه", "نجلا", "نجما", "نجمه", "نجمیه", "نجوا", "نجیبه", "نجیلا", "ندا", "ندیما", "ندیمه", "نذیره", "نرجس", "نرگس", "نرگیس", "نزاکت", "نزیره", "نسترن", "نسرین گل", "نسرین", "نسیبه", "نسیم گل", "نسیمه", "نصیبه", "نصیره", "نظیره", "نظیفه", "نعیمه", "نغمه", "نفس گل", "نفیسه", "نقیبه", "نگار", "نگیتا", "نگین", "نگینه", "نودا", "نور بی بی", "نورجان", "نورجهان", "نورزیه", "نورضیا", "نورضیه", "نورینه", "نوریه", "نوشین", "نویده", "نیره", "نیک بخت", "نیکبخت", "نیلا", "نیلاب", "نیلم", "نیلوفر", 
        "هاجر", "هاجره", "هادیه", "هاشمه", "هانیه", "هایده", "هدیه", "هلینا", "هما", "همیشه گل", "هنگامه", "هوا گل", "هوا", "هوسی", "هوگی", "هویدا", "هیله", "هیلی", 
        "واحده", "واحیده", "وجهیه", "وجیه", "وجیهه", "وحیده", "ورانگه", "وږمه", "وژمه", "وسیله", "وسیمه", "ولایت", "ولوله", "ولیه", "ویدا", "وینوس", 
        "یاسمین", "یسنا", "یگانه", "یلدا", "یما", "یولدوز"
    );

    /**
     * @source Afghanistan Kankor (University Entrance Exam) 2003-2017 data.
     * The data collected, preprocessed and prepared by Abdul Rahman Sherzad (absherzad@gmail.com).
     * @link https://sites.google.com/view/absherzad/family-names
     * @license: Creative Commons Attribution-ShareAlike License
     */
    protected static $lastName = array(
        "ابدالی", "ابراهمی", "ابراهیم خیل", "ابراهیم زاده", "ابراهیم", "ابراهیمی", "اتل", "اتمر", "اچکزی", "احدی", "احراری", "احساس", "احسان", "احسانی", "احمد زی", "احمد", "احمدزاده", "احمدزی", "احمدي", "احمدی", "احمدیار", "اختری", "اختیاری", "اخگر", "اخلاص", "اخلاقی", "اخندزاده", "آخندزاده", "ادیب", "ارباب زاده", "آرزو", "ارشاد", "ارغندیوال", "ارمان", "آرمان", "ارمانی", "اریا", "آریا", "ارین", "آرین", "اریوبی", "آزاد", "استانکزی", "اسحاق زی", "اسحق زاده", "اسحق زی", "اسد", "اسدی", "اسکندری", "اسلامی", "اسلمی", "اسماعیل زاده", "اسماعیلی", "اشرفی", "اشنا", "آشنا", "اصغری", "اصفی", "آصفی", "اصیل", "اعتمادی", "اعظمی", "اعظیمی", "اعلمی", "افتخاری", "افشار", "افضل", "افضلی", "افغان", "افغانیار", "اقبال", "اقبالی", "اکبرزاده", "اکبری", "اکرامی", "اکرمی", "الطاف", "الفت", "الکوزی", "الله یار", "الماس", "الهام", "الیاس", "الیاسی", "امام زاده", "امامی", "امان", "امانی", "امانیار", "امرخیل", "امید", "امیدی", "امیر", "امیرزاده", "امیرزی", "امیری", "امین زاده", "امین زی", "امین یار", "امین", "امینی", "انتظار", "اندر", "اندرابی", "انصاری", "انوری", "اوریا", "اوریاخیل", "ایازی", "ایثار", "ایماق", "ایوبی", 
        "بابری", "بابکرخیل", "باتوری", "باختری", "بارز", "بارک", "بارکزائی", "بارکزی", "باقری", "باهر", "باور", "باوری", "بختیار", "بختیاری", "بخشی", "براتی", "برنا", "بره کی", "برهان", "برهانی", "برومند", "بریالی", "بسمل", "بشارت", "بشردوست", "بشرمل", "بشری", "بشیری", "بصیری", "بلخی", "بلوچ", "بنیادی", "بها", "بهادر", "بهادری", "بهار", "بهاوی", "بهبودی", "بهرام", "بهرامی", "بهروز", "بهزاد", "بهیر", "بوستانی", "بیات", "بیان", "بیانی", "بیدار", "بیک زاد", "بیک زاده", "بیک", "بیکزاد", "بیگ زاد", "بیگ زاده", "بیگ", "بیگزاد", "بیگی", "بینوا", 
        "پارسا", "پاینده", "پردیس", "پروانی", "پشتون", "پکتیاوال", "پناهی", "پوپل زی", "پوپل", "پوپلزی", "پویا", "پیرزاده", "پیروز", "پیکار", "پیکان", "پیمان", 
        "تابش", "تاج", "تاجیک", "تبسم", "تراب", "ترابی", "تره کی", "ترین", "تسل", "تلاش", "تنها", "تنی", "توانا", "توحیدی", "توخی", "توفیق", "توکلی", "تیموری", 
        "ثابت", "ثاقب", "ثمر", 
        "جامی", "جاهد", "جاوید", "جبارخیل", "جباری", "جعفری", "جلال زی", "جلال", "جلالزی", "جلالی", "جلیلی", "جمال زاده", "جمال", "جمالی", "جمشیدی", "جمیلی", "جهانی", "جواد", "جوادی", "جوهری", "جویا", "جویان", "جوینده", "جیلانی", 
        "چکری", 
        "حاتمی", "حاجی زاده", "حاحی", "حازم", "حافظ", "حافظی", "حامد", "حامدی", "حبیب زاده", "حبیب زی", "حبیب یار", "حبیب", "حبیبی", "حداد", "حدران", "حساس", "حسام", "حسامی", "حسرت", "حسن زاده", "حسن زی", "حسن یار", "حسن", "حسنی", "حسنیار", "حسین خیل", "حسین زاده", "حسین", "حسینی", "حصاری", "حضرتی", "حفیظی", "حق بین", "حق پرست", "حق جو", "حق دوست", "حق مل", "حق یار", "حقانی", "حقبین", "حقجو", "حقدوست", "حقمل", "حقیار", "حقیقی", "حکمت", "حکمتی", "حکمی", "حکیم زاده", "حکیم", "حکیمی", "حلاند", "حلیم", "حلیمی", "حماس", "حمدی", "حمید", "حمیدزاده", "حمیدی", "حنفی", "حنیف", "حنیفی", "حیات", "حیاتی", "حیدر", "حیدرزاده", "حیدری", "حیران", 
        "خادم", "خادمی", "خاکسار", "خالد", "خالق یار", "خالقی", "خالقیار", "خاموش", "خان زاده", "خان", "خانزاده", "خاوری", "خاورین", "خپلواک", "خدادادی", "خرم", "خرمی", "خروتی", "خسروی", "خطیبی", "خلوتی", "خلیل", "خلیلی", "خواجه زاده", "خواجه", "خوستی", "خوشحال", "خوشیوال", "خوگیانی", "خیراندیش", "خیرخوا", "خیرخواه", "خیرزاده", "خیری", 
        "دانش یار", "دانش", "دانشجو", "دانشیار", "داودزی", "داودی", "داوری", "درانی", "درمان", "درویش", "درویشی", "دشتی", "دقیق", "دلاور", "دلاوری", "دلدار", "دلسوز", "دورانی", "دوست", "دوستی", "دولت زی", "دولتی", "دیدار", 
        "ذاکر", "ذاکری", "ذاهد", "ذکی", "ذهین", 
        "راحل", "رازقی", "راسخ", "راشد", "رامکی", "رامین", "ربانی", "رجب زاده", "رجبی", "رحمانی", "رحمانی", "رحمت زاده", "رحمت", "رحمن", "رحمنی", "رحمی", "رحیم زاده", "رحیم زی", "رحیم", "رحیمی", "رزاقی", "رسا", "رستگار", "رستم زاده", "رستمی", "رسول", "رسولی", "رشاد", "رشید", "رشیدی", "رضا", "رضای", "رضایی", "رضائی", "رضوان", "رضوانی", "رضوی", "رفعت", "رفیع", "رفیعی", "رفیق", "رفیقی", "رمزی", "رمضانی", "رنجبر", "رهین", "روان", "روحانی", "روحی", "روزی", "روشان", "روشن", "روف", "روفی", "ریحان", 
        "زاهد", "زاهدی", "زرمتی", "زلمی", "زمان", "زمانی", "زمری", "زهیر", "زیارمل", "زیرک", "زیوری", 
        "ساپی", "ساجد", "ساحل", "سادات", "ساعی", "سالارزی", "سالک", "سالمی", "سالنگی", "سامع", "سباوون", "سبحانی", "ستاری", "ستانکزی", "ستومان", "سجاد", "سجادی", "سحر", "سخا", "سخی زاده", "سخی", "سخیزاده", "سدید", "سرابی", "سراج", "سراجی", "سرحدی", "سرداری", "سرفراز", "سرور", "سروری", "سروش", "سعادات", "سعادت", "سعدی", "سعید", "سعیدی", "سفری", "سکندری", "سلامی", "سلجوقی", "سلطان زاده", "سلطان", "سلطانی", "سلیم", "سلیمان خیل", "سلیمان", "سلیمانخیل", "سلیمانی", "سلیمی", "سمسور", "سمندر", "سمندری", "سنگر", "سنگری", "سنگین", "سهار", "سهاک", "سهرابی", "سهیل", "سهیم", "سیار", "سید", "سیدخیلی", "سیدزاده", "سیدی", "سیرت", "سیغانی", "سیفی", "سیلاب", 
        "شاداب", "شادان", "شاکر", "شاکری", "شاهد", "شاهی", "شاهین", "شایان", "شایق", "شباب", "شجاع", "شجاعی", "شرافت", "شرف", "شریف زاده", "شریف", "شریفی", "شفایی", "شفائی", "شفق", "شفیق", "شکوری", "شکیب", "شمال", "شمس", "شمسی", "شنواری", "شهاب", "شهابی", "شهباز", "شهبازی", "شهزاد", "شهزاده", "شهیدزاده", "شهیدی", "شهیر", "شیخ زاده", "شیدا", "شیرزاد", "شیرزاده", "شیرزوی", "شیرزی", "شینواری", "شیوا", 
        "صابر", "صابری", "صاحب زاده", "صاحبزاده", "صاحبی", "صادق", "صادقی", "صادقیار", "صافی", "صالح زاده", "صالح", "صالحی", "صبری", "صبور", "صبوری", "صداقت", "صدری", "صدیق", "صدیقی", "صفا", "صفدری", "صفری", "صمدی", "صمیم", "صمیمی", "صوفی زاده", "صیاد", 
        "ضمیری", "ضیا", "ضیایی", "ضیائی", 
        "طارق", "طاهری", "طوطاخیل", "طوفان", "طیب", 
        "ظاهر", "ظاهری", "ظریف", "ظریفی", "ظفر", "ظفری", "ظهوری", "ظهیر", 
        "عابد", "عابدی", "عاجز", "عادل", "عادلی", "عارف", "عارفی", "عاشوری", "عاصم", "عاطف", "عاطفی", "عالمی", "عالمیار", "عبادی", "عباسی", "عبدالله", "عبدالهی", "عبدی", "عبید", "عبیدی", "عتیق", "عثمان", "عثمانی", "عدیل", "عرب زاده", "عرب زی", "عرب", "عرفان", "عرفانی", "عزتی", "عزیز", "عزیزی", "عزیزیار", "عسکرزاده", "عسکری", "عصمت", "عصمتی", "عطا", "عطای", "عطایی", "عطائی", "عظمی", "عظیمی", "علم یار", "علم", "علمی", "علمیار", "علوی", "علی پور", "علی خیل", "علی زاده", "علی زی", "علی یار", "علی", "علیزاده", "علیزی", "علیمی", "عمر", "عمران", "عمرخیل", "عمرزاده", "عمرزی", "عمری", "عنایت", "عیار", "عیسی زاده", "عینی", 
        "غریب یار", "غزنوی", "غفاری", "غفوری", "غلامی", "غنی زاده", "غنی", "غوثی", "غوربندی", "غوری", "غیاثی", "غیرت", "غیور", 
        "فاروقی", "فاضل", "فاضلی", "فایز", "فایض", "فایق", "فخری", "فدا", "فدایی", "فدائی", "فراهی", "فرحت", "فرزاد", "فرزام", "فرزان", "فرملی", "فرهاد", "فرهادی", "فرهمند", "فرهنگ", "فروتن", "فروغ", "فریادی", "فضل", "فضلی", "فطرت", "فقیرزاده", "فقیرزی", "فقیری", "فقیریار", "فهیم", "فهیمی", "فولادی", "فیاض", "فیاضی", "فیروز", "فیروزی", "فیصل", "فیض", "فیضان", "فیضی", 
        "قادری", "قاری زاده", "قاریزاده", "قاسمی", "قاضی زاده", "قانت", "قانع", "قانونی", "قبادی", "قتالی", "قدوسی", "قدیری", "قربانی", "قرلق", "قریشی", "قلم یار", "قلندر", "قلندری", "قمبری", "قمری", "قیام", "قیامی", "قیومی", 
        "کارگر", "کاشفی", "کاظمی", "کاظیمی", "کاکر", "کامران", "کبیری", "کتوازی", "کریم", "کریمی", "کمال زاده", "کمال", "کمالی", "کوچی", "کوهدامنی", "کوهستانی", "کوهی", "کیانی", "کیهان", 
        "گردیزی", "گلزاد", "گلزار", "گلستانی", "گوهر", "گوهری", "گیلانی", 
        "لشکری", "لطفی", "لطیفی", "لعلی", "لنگری", "لودین", "لیوال", 
        "ماهر", "مایار", "مایل", "مبارز", "مبشر", "متقی", "متوکل", "متین", "مجاهد", "مجددی", "مجروح", "مجیدی", "محب زاده", "محب", "محبت", "محبوب", "محبوبی", "محبی", "محرابی", "محسن", "محسنی", "محقق", "محمد", "محمدزاده", "محمدزی", "محمدي", "محمدی", "محمود", "محمودی", "مختار", "مختاری", "مخلص", "مدبر", "مدثر", "مددی", "مراد", "مرادی", "مرزاخیل", "مرزای", "مرزایی", "مرزائی", "مروت", "مسجدی", "مسرور", "مسعود", "مسعودی", "مسلم یار", "مسلم", "مشال", "مشتاق", "مشعل", "مشفق", "مصباح", "مصدق", "مصطفی", "مصلح", "مطهری", "مظفری", "مظلوم یار", "معراج", "معروف", "معروفی", "معصوم", "معصومی", "مفتون", "مقبل", "مقصودی", "ملاخیل", "ملک زاده", "ملک زی", "ملکزاده", "ملکزی", "ملکی", "ملنگ", "ممتاز", "مموزی", "مندوزی", "منصور", "منصوری", "منگل", "منوری", "منیب", "منیر", "مهدوی", "مهدی", "مهر", "مهربان", "مهرزاد", "مهری", "مهمند", "موحد", "مودودی", "موسوی", "موسی زاده", "موسی زی", "مولوی زاده", "مومن زاده", "مومن", "مومند", "مومنی", "میاخیل", "میرخیل", "میرزا", "میرزاد", "میرزاده", "میرزازاده", "میرزای", "میرزایی", "میرزائی", "میری", "میوند", 
        "نادری", "ناصح", "ناصر", "ناصری", "ناظری", "نایاب", "نایب خیل", "نایبی", "نایل", "نبوی", "نبی زاده", "نبی", "نبیل", "نثار", "نثاری", "نجات", "نجاتی", "نجرابی", "نجفی", "نجم", "نجمی", "نجیب", "نجیبی", "نجیمی", "ندیم", "نذیری", "نزهت", "نسیمی", "نشاط", "نصرت", "نصرتی", "نصری", "نصیری", "نظامی", "نظری", "نظیری", "نظیمی", "نعمانی", "نعمتی", "نعیمی", "نقشبندی", "نوابی", "نور", "نورانی", "نورزاد", "نورزاده", "نورزایی", "نورزائی", "نورزی", "نورستانی", "نوروزی", "نوری", "نوید", "نیازمند", "نیازی", "نیک زاد", "نیک زاده", "نیک مل", "نیکزاد", "نیکمل", 
        "هادی", "هارونی", "هاشمی", "هاشیمی", "هجران", "هدایت", "هروی", "هلال", "هلالی", "همت", "همتی", "همدرد", "همدم", "همراز", "همراه", "همکار", "همنوا", "هوتک", "هوتکی", "هوشمند", "هوفیانی", "هویدا", 
        "واثق", "واحدی", "واحدیار", "واعظی", "وثیق", "وحدت", "وحیدی", "وردک", "وردک", "وزیری", "وصال", "وطن دوست", "وطن یار", "وفا", "وفادار", "وفایی", "وفائی", "وقار", "وکیل زاده", "وکیلی", "ولی زاده", "ولی", "ولیزاده", "وهاب زاده", "وهاب", "وهاج", 
        "یادگاری", "یارزاده", "یارمل", "یاری", "یاسینی", "یاور", "یاوری", "یزدانی", "یعقوبی", "یوسف زاده", "یوسف زی", "یوسفزی", "یوسفی", "یولداش", "یونسی"
    );

    protected static $titleMale = array('آقای', 'استاد', 'دکتر', 'دوکتور', 'داکتر', 'مهندس', 'انجنیر');
    protected static $titleFemale = array('خانم', 'استاد', 'دکتر', 'دوکتورس', 'داکترس', 'مهندس', 'انجنیر');
}
