<?php

namespace Faker\Provider\fa_AF;

class Internet extends \Faker\Provider\Internet
{
    /**
     * @example 'a.sherzad'
     * @example 'ab.sherzad'
     * @example 'sherzad20'
     */
    protected static $userNameFormats = array(
        '{{firstNameAsciiFirstChar}}.{{lastNameAscii}}',
        '{{firstNameAsciiFirstChars}}.{{lastNameAscii}}',
        '{{lastNameAscii}}##',
    );

    /**
     * @example 'a.sherzad@yahoo.com'
     * @example 'ab.sherzad@gmail.com'
     * @example 'sherzad20@sherzad.af'
     */
    protected static $emailFormats = array(
        '{{userName}}@{{domainName}}',
        '{{userName}}@{{freeEmailDomain}}',
    );

    /**
     * @example 'http://www.sherzad.com'
     * @example 'http://www.ab.sherzad.af'
     * @example 'http://www.sherzad.edu.af'
     */
    protected static $urlFormats = array(
        'http://www.{{domainName}}',
        'https://www.{{domainName}}',
    );

    protected static $freeEmailDomain = array(
        'gmail.com', 'yahoo.com', 'hotmail.com', 'aol.com', 'outlook.com', 'mail.com'
    );

    protected static $tld = array(
        'com', 'gov', 'org', 'af', 'com.af', 'net', 'info', 'edu.af', 'gov.af',
    );

    /**
     * @source Afghanistan Kankor (University Entrance Exam) 2003-2017 data.
     * The data collected, preprocessed and prepared by Abdul Rahman Sherzad (absherzad@gmail.com).
     * @link https://sites.google.com/view/absherzad/family-names
     * @license: Creative Commons Attribution-ShareAlike License
     */
    protected static $lastNameAscii = array(
        "Aajiz", "Abbasi", "Abdali", "Abdi", "Abdollahi", "Abdullah", "Abed", "Abedi", "Achakzai", "Adel", "Adeli", "Adib", "Adil", "Afghan", "Afghanyar", "Afshar", "Afzal", "Afzali", "Ahadi", "Ahmad", "Ahmadi", "Ahmadi", "Ahmadiyar", "Ahmadzadeh", "Ahmadzai", "Ahmadzai", "Aini", "Akbari", "Akbarzadeh", "Akhgar", "Akhlaqi", "Akhtari", "Akhunzadeh", "Akhunzadeh", "Akrami", "Alawi", "Alekozai", "Alemi", "Alemi", "Alemyar", "Alemyar", "Ali", "Alikhil", "Alipor", "Aliyar", "Alizadeh", "Alizadeh", "Alizai", "Alizai", "Allahyar", "Almas", "Almayyar", "Aman", "Amani", "Amanyar", "Amarkhil", "Amin", "Amini", "Aminyar", "Aminzadeh", "Aminzai", "Amir", "Amiri", "Amirzadeh", "Amirzai", "Andarabi", "Ander", "Ansari", "Anwari", "Arab", "Arabzadeh", "Arabzai", "Arazo", "Arbabzadeh", "Arghandival", "Arian", "Arian", "Arif", "Arifi", "Ariya", "Ariyubi", "Arman", "Arman", "Armani", "Arya", "Asad", "Asadi", "Asefi", "Asem", "Asghari", "Ashna", "Ashna", "Ashori", "Ashraf", "Ashrafi", "Asifi", "Asil", "Askari", "Askarzadeh", "Aslami", "Ata", "Ataei", "Ataei", "Ataei", "Atef", "Atefi", "Atel", "Atiq", "Atmar", "Ayar", "Ayazi", "Ayoubi", "Azad", "Azami", "Azami", "Azami", "Azimi", "Azimi", "Aziz", "Azizi", "Azizyar", 
        "Babari", "Babikrkhil", "Baha", "Bahador", "Bahadori", "Bahar", "Bahavi", "Baheer", "Bahram", "Bahrami", "Bakhshi", "Bakhtari", "Bakhtiar", "Bakhtiari", "Balkhi", "Baloch", "Baqiri", "Barak", "Baraki", "Barakzai", "Barakzai", "Barati", "Bariz", "Baromand", "Baryalay", "Basharat", "Bashardoost", "Bashari", "Basharmal", "Bashiri", "Basiri", "Batori", "Bawar", "Bawari", "Bayan", "Bayani", "Bayat", "Behboudi", "Behrouz", "Behzad", "Bidar", "Big", "Bigi", "Bigzad", "Bigzad", "Bigzad", "Bigzadeh", "Bik", "Bikzad", "Bikzaeh", "Binawa", "Bismil", "Bonyadi", "Borhani", "Borhani", "Borna", "Bostani", 
        "Chakari", 
        "Danish", "Danishjo", "Danishyar", "Danishyar", "Daqiq", "Darman", "Darwish", "Darwishi", "Dashti", "Davoudi", "Dawari", "Dawlati", "Dawoodzai", "Dawrani", "Delawar", "Delawari", "Didar", "Dildar", "Dilsuz", "Dorrani", "Dost", "Dosti", "Dowlatzai", 
        "Ebadi", "Ebrahimi", "Ehrari", "Ehsan", "Ehsani", "Ehsas", "Elham", "Elm", "Elmi", "Elyas", "Elyasi", "Emami", "Enayat", "Erfan", "Eshaqzadeh", "Esmaeili", "Esmaeilzadeh", "Esmat", "Esmati", "Essazadeh", "Etamadi", "Ezati", "Ezmaray", "Ezmaray", 
        "Fada", "Fadaei", "Fadaei", "Fafihi", "Fahim", "Fahimi", "Faiq", "Faisal", "Faiz", "Faiz", "Faiz", "Faizan", "Faizi", "Fakhry", "Faqiri", "Faqiryar", "Faqirzadeh", "Faqirzai", "Farahi", "Farahmand", "Farhad", "Farhadi", "Farhang", "Farhat", "Farooqi", "Faryadi", "Farzad", "Farzam", "Farzan", "Fayyazi", "Fazeli", "Fazil", "Fazl", "Fazli", "Firooz", "Firozi", "Fitrat", "Fiyaz", "Fooladi", "Formalie", "Frotan", "Frough", 
        "Gailani", "Gardizi", "Ghaffari", "Ghafouri", "Ghairat", "Ghani", "Ghanizadeh", "Gharibyar", "Ghawsi", "Ghayor", "Ghazizadeh", "Ghaznavi", "Ghiyahi", "Ghorbandi", "Ghori", "Ghulami", "Gohari", "Golestani", "Golzar", "Gowhar", "Gulzad", 
        "Habib", "Habibi", "Habibyar", "Habibzadeh", "Habibzai", "Haddad", "Hadi", "Hadran", "Hafez", "Hafezi", "Hafizi", "Hahi", "Haidari", "Haider", "Hairan", "Hajizadeh", "Hakami", "Hakim", "Hakimi", "Hakimzadeh", "Halim", "Halimi", "Hamdam", "Hamdard", "Hamdi", "Hamed", "Hamedi", "Hamid", "Hamidi", "Hamidzadeh", "Hamkar", "Hammas", "Hamnava", "Hamra", "Hamraz", "Hanafi", "Hanif", "Hanifi", "Haqani", "Haqbin", "Haqbin", "Haqdost", "Haqdost", "Haqiqi", "Haqjo", "Haqjo", "Haqmal", "Haqmal", "Haqparast", "Haqyar", "Haqyar", "Harooni", "Hasam", "Hasami", "Hasan", "Hasani", "Hasanyar", "Hasanyar", "Hashemi", "Hashimi", "Hasrat", "Hassanzadeh", "Hassanzai", "Hassas", "Hatami", "Hayat", "Hayati", "Hazim", "Hazrati", "Hedayat", "Heidarzadeh", "Hekmat", "Hekmati", "Helal", "Helali", "Hemat", "Hemati", "Herawi", "Hesari", "Hijran", "Hofiyani", "Hoshmand", "Hossein", "Hosseini", "Hosseinkhil", "Hosseinzadeh", "Hotak", "Hoteki", "Howaida", 
        "Ibrahim", "Ibrahimi", "Ibrahimkhil", "Ibrahimzadeh", "Iftakhari", "Ikhlas", "Ikhtiyari", "Ikrami", "Iltaf", "Imamzadeh", "Imaq", "Intazar", "Iqbal", "Iqbali", "Irfani", "Irshad", "Isar", "Ishaqzai", "Ishaqzai", "Islami", 
        "Jabari", "Jabarkhil", "Jafari", "Jahani", "Jahid", "Jailani", "Jalal", "Jalali", "Jalalzai", "Jalalzai", "Jalili", "Jamal", "Jamali", "Jamalzadeh", "Jami", "Jamilli", "Jamshidi", "Javad", "Javadi", "Javid", "Jawhari", "Joya", "Joyan", "Joyendeh", 
        "Kabiri", "Kakar", "Kamal", "Kamali", "Kamalzadeh", "Kamran", "Kargar", "Karim", "Karimi", "Kashifi", "Katwazi", "Kayhan", "Kazemi", "Kazemi", "Khademi", "Khadim", "Khaiandish", "Khairi", "Khairkhaa", "Khairkhaa", "Khairzadeh", "Khaja", "Khajazadeh", "Khaksar", "Khalid", "Khalil", "Khalili", "Khaliqi", "Khaliqyar", "Khaliqyar", "Khalwati", "Khamosh", "Khan", "Khanzadeh", "Khanzadeh", "Khapalwak", "Kharwati", "Khatibi", "Khawari", "Khawarin", "Khodadadi", "Khogiyani", "Khorram", "Khorrami", "Khosravi", "Khosti", "Khushal", "Khushiwal", "Kiani", "Kohdamani", "Kohi", "Kohistani", "Kuchi", 
        "Lahli", "Langari", "Lashkari", "Latifi", "Liwal", "Lodin", "Lutfi", 
        "Madadi", "Maftoon", "Mahboob", "Mahboubi", "Mahdavi", "Mahil", "Mahir", "Mahmood", "Mahmoodi", "Maiwand", "Majidi", "Majroh", "Malang", "Malekzadeh", "Malekzai", "Malekzai", "Maliki", "Malikzadeh", "Mamozai", "Mandozi", "Mangal", "Manori", "Mansour", "Mansouri", "Maqsodi", "Maroof", "Maroofi", "Mashal", "Mashal", "Masjidi", "Masoom", "Masoud", "Masoumi", "Masroor", "Massoudi", "Matin", "Mawdodi", "Mawhid", "Mayar", "Mazlomyar", "Mehdi", "Mehr", "Mehraban", "Mehrabi", "Mehraj", "Mehri", "Mehrzad", "Mesbah", "Miakhil", "Mirazazadeh", "Miri", "Mirkhil", "Mirza", "Mirzad", "Mirzadeh", "Mirzaei", "Mirzaei", "Mirzaei", "Mirzaei", "Mirzaei", "Mirzaei", "Mirzakhil", "Mobashir", "Modabbir", "Modassir", "Mohammad", "Mohammadi", "Mohammadi", "Mohammadzadeh", "Mohammadzai", "Mohaqiq", "Mohebat", "Mohebi", "Mohib", "Mohibzadeh", "Mohmand", "Mohsen", "Mohseni", "Mojahid", "Mokhles", "Mokhtar", "Mokhtari", "Molavizadeh", "Momand", "Momem", "Momemzadeh", "Momeni", "Moqbil", "Morad", "Moradi", "Moriwat", "Mosaddiq", "Moshfiq", "Moshtaq", "Mosleh", "Moslem", "Moslemyar", "Motahari", "Mottaqi", "Mousavi", "Mozafari", "Mubariz", "Mujadadi", "Mullahkhil", "Mumtaz", "Munib", "Munir", "Musazadeh", "Musazai", "Mustafa", "Mutawakil", 
        "Nabavi", "Nabil", "Nabil", "Nabizadeh", "Naderi", "Nadim", "Naeemi", "Nahibkhil", "Nahil", "Naibi", "Najafi", "Najati", "Najib", "Najibi", "Najm", "Najmi", "Najmi", "Najrabi", "Naqshbandi", "Nasar", "Nasari", "Naseh", "Naser", "Naseri", "Nashat", "Nasimi", "Nasiri", "Nasri", "Navid", "Nawabi", "Nawrouzi", "Nayab", "Nazari", "Nazeri", "Nazhat", "Nazimi", "Naziri", "Naziri", "Nemati", "Nezami", "Nijat", "Nikmal", "Nikmal", "Nikzad", "Nikzad", "Nikzadeh", "Niyazi", "Niyazmand", "Nomani", "Noor", "Noorani", "Noori", "Noorzad", "Noorzadeh", "Noorzaei", "Noorzai", "Noorzai", "Nuristani", "Nusrat", "Nusrati", 
        "Obaid", "Obaidi", "Olfat", "Omar", "Omari", "Omarzadeh", "Omarzai", "Omerkhil", "Omid", "Omidi", "Omran", "Orya", "Oryakhil", "Osman", "Osmani", 
        "Paktyawal", "Panahi", "Paradise", "Parsa", "Parvani", "Pashtun", "Payendah", "Paykan", "Paykar", "Payman", "Peroz", "Pirzadeh", "Popal", "Popalzai", "Popalzai", "Poya", 
        "Qaderi", "Qadiri", "Qaiumi", "Qalamyar", "Qalandar", "Qalandari", "Qamari", "Qambari", "Qani", "Qanit", "Qanoni", "Qarizadeh", "Qarizadeh", "Qarliq", "Qaseemi", "Qattali", "Qiam", "Qiami", "Qobadi", "Qodusi", "Quraishi", "Qurbani", 
        "Rabbani", "Rafat", "Rafi", "Rafiq", "Rafiqi", "Rahami", "Raheen", "Rahil", "Rahimi", "Rahimz", "Rahimzadeh", "Rahimzai", "Rahmani", "Rahmani", "Rahmani", "Rahmani", "Rahmat", "Rahmatzadeh", "Rajabi", "Rajabzadeh", "Ramaki", "Ramazani", "Ramin", "Ranjbar", "Rasa", "Rashad", "Rashid", "Rashid", "Rashidi", "Rasikh", "Rasooli", "Rasoul", "Rastagar", "Rauf", "Raufi", "Rawan", "Rayhan", "Razaei", "Razavi", "Raziqi", "Raziqi", "Reza", "Rezaei", "Rezaei", "Rezvani", "Rizwan", "Rohani", "Rohi", "Roozi", "Roshan", "Roshan", "Rustami", "Rustamzadeh", 
        "Sabawon", "Saber", "Saberi", "Sabit", "Sabour", "Sabouri", "Sabri", "Sadaqat", "Sadat", "Saddiq", "Sadeqi", "Sadid", "Sadiqi", "Sadiqyar", "Sadri", "Saeed", "Saeed", "Saeedi", "Saeedzadeh", "Safa", "Safari", "Safari", "Safdari", "Safi", "Sahadat", "Sahadat", "Sahak", "Sahar", "Sahar", "Sahdi", "Sahebi", "Sahi", "Sahibzadeh", "Sahibzadeh", "Sahil", "Sahim", "Saidi", "Saidkhil", "Saie", "Saifi", "Saighani", "Saiyar", "Sajad", "Sajid", "Sajjadi", "Sakha", "Sakhi", "Sakhizadeh", "Sakhizadeh", "Salami", "Salangi", "Salarzai", "Saleemi", "Saleh", "Salehi", "Salehzadeh", "Salik", "Salim", "Salimi", "Saljoqi", "Samadi", "Samandar", "Samandry", "Samar", "Sami", "Samim", "Samimi", "Samsour", "Sangar", "Sangari", "Sangin", "Saqib", "Saraj", "Saraji", "Sardari", "Sarfaraz", "Sarhadi", "Sarwar", "Sarwari", "Sattari", "Sayyad", "Sekandari", "Sekandari", "Shabab", "Shadab", "Shadan", "Shafaq", "Shafiq", "Shahab", "Shahabi", "Shahbaz", "Shahbazi", "Shaheer", "Shahi", "Shahid", "Shahidi", "Shahidzadeh", "Shahin", "Shahzad", "Shahzadeh", "Shaida", "Shaker", "Shakeri", "Shakib", "Shakori", "Shamal", "Shams", "Shamsi", "Shaqahiq", "Sharafat", "Sharif", "Sharifi", "Sharifzadeh", "Shayan", "Shefaei", "Sherzad", "Sherzadeh", "Sherzai", "Sherzoi", "Shifaei", "Shikhzadeh", "Shinwari", "Shinwari", "Shiva", "Shoja", "Shojahi", "Siddiqi", "Silab", "Sirat", "Sobhani", "Soheil", "Sohrabi", "Solaiman", "Solaimani", "Solaimankhil", "Solaimankhil", "Sorabi", "Soroush", "Stanakzai", "Stanzakzai", "Stooman", "Sufizadeh", "Sultan", "Sultani", "Sultanzadeh", 
        "Taaj", "Tabasom", "Tabish", "Taheri", "Tajik", "Talash", "Tanha", "Tany", "Taraki", "Tarin", "Tariq", "Tasel", "Tavakoli", "Tawana", "Tawfiq", "Tawhidi", "Tayeb", "Timorri", "Tokhi", "Toofan", "Torab", "Torabi", "Totakhil", 
        "Wafa", "Wafadar", "Wafaei", "Wafaei", "Wahab", "Wahabzadeh", "Wahaj", "Wahdat", "Wahdiyar", "Wahidi", "Wahidi", "Wahizi", "Wakili", "Wakilzadeh", "Wali", "Walizadeh", "Walizadeh", "Wardak", "Wardak", "Wasal", "Wasiq", "Wasiq", "Watandost", "Watanyar", "Waziri", "Weqar", "Yadegari", 
        "Yaqubi", "Yari", "Yarmal", "Yarzadeh", "Yasini", "Yawar", "Yawari", "Yazdani", "Younesi", "Yousufzadeh", "Yuldash", "Yusufi", "Yusufzai", "Yusufzai", 
        "Zafar", "Zafari", "Zahedi", "Zaheed", "Zaheer", "Zaheer", "Zahid", "Zahin", "Zahir", "Zahiri", "Zahori", "Zaimiri", "Zakeri", "Zaki", "Zakir", "Zaland", "Zalmai", "Zaman", "Zamani", "Zarif", "Zarifi", "Zermati", "Zia", "Ziaei", "Ziaei", "Ziarmal", "Zirak", "Ziwari"
    );

    /**
     * @source Afghanistan Kankor (University Entrance Exam) 2003-2017 data.
     * The data collected, preprocessed and prepared by Abdul Rahman Sherzad (absherzad@gmail.com).
     * @link https://sites.google.com/view/absherzad/male-names
     * @link https://sites.google.com/view/absherzad/female-names
     * @license: Creative Commons Attribution-ShareAlike License
     */
    protected static $firstNameAscii = array(
        "Aazita", "Abbas", "Abbasin", "Abdul Ahad", "Abdul Ahmad", "Abdul Ali", "Abdul Alim", "Abdul Azim", "Abdul Aziz", "Abdul Baghi", "Abdul Bahis", "Abdul Bari", "Abdul Baset", "Abdul Bashir", "Abdul Basir", "Abdul Fahim", "Abdul Farid", "Abdul Fattah", "Abdul Fawad", "Abdul Ghaffar", "Abdul Ghafoor", "Abdul Ghani", "Abdul Ghiyor", "Abdul Habib", "Abdul Hadi", "Abdul Hafez", "Abdul Hai", "Abdul Hakim", "Abdul Halim", "Abdul Hamed", "Abdul Hamid", "Abdul Hanan", "Abdul Haq", "Abdul Hussein", "Abdul Hussib", "Abdul Jabbar", "Abdul Jalil", "Abdul Jamil", "Abdul Kabir", "Abdul Karim", "Abdul Khabir", "Abdul Khaleq", "Abdul Khalid", "Abdul Khalil", "Abdul Latif", "Abdul Latif", "Abdul Maarof", "Abdul Majib", "Abdul Majid", "Abdul Malik", "Abdul Malik", "Abdul Mannan", "Abdul Mansour", "Abdul Matin", "Abdul Mobin", "Abdul Mohammad", "Abdul Momen", "Abdul Moqim", "Abdul Munir", "Abdul Musawir", "Abdul Naser", "Abdul Nasir", "Abdul Qadim", "Abdul Qadir", "Abdul Qadir", "Abdul Qahar", "Abdul Qahir", "Abdul Qaium", "Abdul Qoddus", "Abdul Rab", "Abdul Rabiq", "Abdul Rahim", "Abdul Rahman", "Abdul Rashid", "Abdul Rasul", "Abdul Rauf", "Abdul Razaq", "Abdul Raziq", "Abdul Sabour", "Abdul Salam", "Abdul Salim", "Abdul Samad", "Abdul Sami", "Abdul Samim", "Abdul Sattar", "Abdul Shakor", "Abdul Tawab", "Abdul Wadood", "Abdul Wahab", "Abdul Wahed", "Abdul Wahid", "Abdul Wahid", "Abdul Wakil", "Abdul Wali", "Abdul Waris", "Abdul Wasi", "Abdul Wasi", "Abdul Zahir", "Abdul Zahoor", "Abdullah", "Abdulmutallab", "Abed", "Abedeh", "Abedullah", "Abu Bakr", "Abu Dhar", "Adel", "Adeleh", "Adiba", "Adiba", "Adibullah", "Adina", "Afghan Gul", "Afifah", "Afsana", "Afsoon", "Ahdiah", "Ahmad Ali", "Ahmad Arshad", "Ahmad Bilal", "Ahmad Fahim", "Ahmad Faisal", "Ahmad Farhad", "Ahmad Fawad", "Ahmad Fayaz", "Ahmad Gul", "Ahmad Hamed", "Ahmad Jan", "Ahmad Javid", "Ahmad Jawad", "Ahmad Jawid", "Ahmad Khalid", "Ahmad Khan", "Ahmad Mansour", "Ahmad Masi", "Ahmad Masoud", "Ahmad Milad", "Ahmad Mokhtar", "Ahmad Monir", "Ahmad Navid", "Ahmad Omid", "Ahmad Qais", "Ahmad Ramin", "Ahmad Rashed", "Ahmad Reshad", "Ahmad Reza", "Ahmad Samim", "Ahmad Samir", "Ahmad Shabir", "Ahmad Shah", "Ahmad Shah", "Ahmad Shakib", "Ahmad Shakir", "Ahmad Shoaib", "Ahmad Siar", "Ahmad Soheil", "Ahmad Tamim", "Ahmad Tareq", "Ahmad Zahir", "Ahmad Zai", "Ahmad Zaki", "Ahmad Zia", "Ahmad Zia", "Ahmad Zia", "Ahmad Zubair", "Ahmad", "Ahmed Farid", "Ahmed Waleed", "Ahmed Wali", "Aidiah", "Ainadin", "Ainullah", "Ajab Khan", "Ajmal", "Akbar", "Akhtar Mohammad", "Akmal", "Alawaddin", "Ali Ahmad", "Ali Akbar", "Ali Asghar", "Ali Hussein", "Ali Jan", "Ali Khan", "Ali Mohammad", "Ali Reza", "Ali Shah", "Ali Sina", "Ali", "Alia",  "Almas", "Aman", "Amanullah", "Amena", "Amila", "Amin", "Amina", "Amina", "Amina", "Aminullah", "Amir Khan", "Amir Mohammad", "Amirullah", "Amruddin", "Amrullah", "Anahita", "Anar Gul", "Andisha", "Angela", "Angizeh", "Anhamullah", "Anila", "Anis Gul", "Anis Gul", "Anisa", "Anisa", "Anita", "Anita", "Anjila", "Anooshe", "Ansarullah", "Anwar", "Aqa Mohammad", "Aqela", "Aqilah", "Aqilah", "Aqlima", "Arash", "Aref Allah", "Aref", "Arefeh", "Arezo", "Arezo", "Arghawan", "Arian", "Ariana", "Ariya", "Ariya", "Arsalan", "Asadullah", "Asadullah", "Ashiqullah", "Ashraf", "Asif", "Asifa", "Asifeh", "Asima", "Asiyeh", "Asma", "Asma", "Asra", "Asrarullah", "Asyah", "Ataullah", "Ataullah", "Ataullah", "Ataurahman", "Atefeh", "Atefeh", "Atekeh", "Atia", "Atiqah", "Atiqullah", "Atta Mohammad", "Awesta", "Ayamuddin", "Ayedeh", "Ayesha", "Azadah", "Azadeh", "Azimah", "Azimullah", "Azita", "Aziz Ahmad", "Aziz Gul", "Aziz Rahman", "Aziz", "Aziza", "Azizullah", "Azizullah", 
        "Badam Gul", "Badriya", "Bahar", "Bahara", "Bahauddin", "Baheshta", "Bahram", "Bahramuddin", "Bakhtawar", "Bakhtiar", "Bakhtullah", "Banafsha", "Banoo", "Baqir", "Barga Gul", "Barkatullah", "Bas Bibi", "Bas Gul", "Bas Gul", "Bas Mina", "Basera", "Basharmal", "Bashir Ahmad", "Bashir", "Basia", "Basima", "Basir Ahamed", "Basir", "Basira", "Basmina", "Batool", "Baz Mohammad", "BBC Marwah", "Bbi Rahele", "Beckstash", "Behnaz", "Behrouz", "Belghis", "Belghis", "Benin", "Beryalai", "Bibi Aaliyah", "Bibi Abedeh", "Bibi Adela", "Bibi Amina", "Bibi Amina", "Bibi Amina", "Bibi Amine", "Bibi Anessa", "Bibi Arzu", "Bibi Asiyah", "Bibi Asma", "Bibi Atefeh", "Bibi Ayesha", "Bibi Aziza", "Bibi Basira", "Bibi Fahimeh", "Bibi Fariba", "Bibi Farida", "Bibi Farzaneh", "Bibi Fatema", "Bibi Fawzia", "Bibi Firoozeh", "Bibi Freshteh", "Bibi Gul", "Bibi Habiba", "Bibi Hajirah", "Bibi Hajra", "Bibi Hakima", "Bibi Halima", "Bibi Hamideh", "Bibi Hanifa", "Bibi Hawa", "Bibi Hawa", "Bibi Homa", "Bibi Homeira", "Bibi Husnia", "Bibi Hussna", "Bibi Jamilah", "Bibi Jan", "Bibi Kamela", "Bibi Karima", "Bibi Khadijah", "Bibi Khaldeh", "Bibi Khatira", "Bibi Kobra", "Bibi Latifa", "Bibi Lina", "Bibi Malika", "Bibi Manizha", "Bibi Maryam", "Bibi Marzieh", "Bibi Masoumeh", "Bibi Massoudah", "Bibi Medina", "Bibi Morsal", "Bibi Mozhdah", "Bibi Mozhgan", "Bibi Nadia", "Bibi Nafiseh", "Bibi Nahida", "Bibi Najibah", "Bibi Najiyah", "Bibi Narges", "Bibi Nasimah", "Bibi Naziah", "Bibi Nazifah", "Bibi Negina", "Bibi Nooria",  "Bibi Razieh", "Bibi Reyhaneh", "Bibi Roqiyah", "Bibi Sabereh", "Bibi Sadaf", "Bibi Sadiia", "Bibi Saeedeh", "Bibi Sakineh", "Bibi Saliha", "Bibi Salimeh", "Bibi Samira", "Bibi Sara", "Bibi Sarah", "Bibi Shabanah", "Bibi Shabnam", "Bibi Sharifa", "Bibi Shokria", "Bibi Siddiqa", "Bibi Somayeh", "Bibi Soriya", "Bibi Tahereh", "Bibi Tamanna", "Bibi Tayebeh", "Bibi Wahidah", "Bibi Yalda", "Bibi Zahra", "Bibi Zainab", "Bibi Zakia", "Bibi Zarifah", "Bibi Zarminna", "Bibi Zohal", "Bibi Zohra", "Bigam", "Bijan", "Bilal Ahmad", "Binazir", "Bismillah", "Brishna", "Burhanuddin",  
        "Chaman Gul", "Chaman", 
        "Dad Mohammad", "Dadullah", "Danish", "Dawoud", "Devah", "Diana", "Diba", "Dil Aqa", "Dilafruz", "Dilawar", "Din Mohammad", "Dina", "Dost Mohammad", "Drukhshan", "Dunya", "Dur Mohammad", 
        "Ebadullah", "Ehsan", "Ehsanullah", "Eid Mohammad", "Eidi Mohammad", "Elaha", "Elaha", "Eleena", "Elena", "Elham", "Elham", "Elhama", "Elhamuddin", "Elmira", "Elnaz", "Elyas", "Emadadin", "Emal", "Enayat al-Rahman", "Enayatullah", "Esmail", "Esmatullah", "Essa Khan", "Evaz Ali", "Ewaz", "Ezatullah", "Ezmaray", 
        "Fada Mohammad", "Fadiyah", "Fahim", "Fahimah", "Fahimeh", "Fahimullah", "Faiqah", "Faisal", "Faiz Ahmad", "Faiz Mohammad", "Faizah", "Faizuddin", "Faizullah", "Faizur Rahman", "Fakhirah", "Fakhraddin", "Fakhria", "Falaq Naaz", "Farah Diba", "Farah Naz", "Farah", "Farahnaz", "Farahnaz", "Faramarz", "Farangis", "Farangis", "Farangis", "Farangis", "Fardin", "Fardina", "Farhad", "Farhadullah", "Farhat", "Fariba", "Fariba", "Farid Ahmad", "Farid Ahmad", "Farid", "Farideh", "Faridullah", "Farinaa", "Fariyah", "Farizah", "Farkhunda", "Farmanullah", "Farnoosh", "Farooq", "Farrokh Lagha", "Farrokh", "Farshad", "Farshid", "Farwa", "Faryal", "Farzad", "Farzaneh", "Farzia", "Fatima", "Fattana", "Fatullah", "Fawad Ahmad", "Fawad", "Fawziah", "Fayaz", "Fayeza", "Fayeza", "Fayeza", "Fazah", "Fazila", "Fazila", "Fazilah", "Fazl Ahmad", "Fazl Mohammad", "Fazluddin", "Fazlul Haq", "Fazlul Rab", "Fazlullah", "Fazlur Rahim", "Fazlur Rahman", "Ferdows", "Firooz Ahmad", "Firooz", "Firooza", "Firoozan", "Firoza", "Firozuddin", "Florance", "Fraidoon", "Freema", "Freshteh", "Friha", "Froozan", "Frough", "Frouhar", 
        "Gaiso", "Ghazaal", "Ghazal", "Ghazalah", "Ghiasuddin", "Gholam Abbas", "Gholam Hossein", "Ghoncha Gul", "Ghotbuddin", "Ghousaddin", "Ghulam Ali", "Ghulam Farooq", "Ghulam Haidar", "Ghulam Hassan", "Ghulam Hazrat", "Ghulam Mohammad", "Ghulam Mohiuddin", "Ghulam Mojtaba", "Ghulam Morteza", "Ghulam Mustafa", "Ghulam Nabi", "Ghulam Rabbani", "Ghulam Rasoul", "Ghulam Reza", "Ghulam Saddiq", "Ghulam Sakhi", "Ghulam Sarwar", "Ghulam Yahya", "Ghulam Yahya", "Ghutai", "Gina", "Giranah", "Gita", "Giti", "Gohar", "Gul Afrooz", "Gul Afshan", "Gul Ahmad", "Gul Andam", "Gul Aqa", "Gul Aqa", "Gul Bahar", "Gul Bakht", "Gul Bibi", "Gul Bigam", "Gul Chaman", "Gul Chehra", "Gul Chehra", "Gul Dasta", "Gul Ghotai", "Gul Ghutai", "Gul Jan", "Gul Makai", "Gul Mina", "Gul Mohammad", "Gul Naaz", "Gul Naaz", "Gul Nisa", "Gul Pari", "Gul Payda", "Gul Rahman", "Gul Rahman", "Gul Shah", "Gul Shah", "Gul Sima", "Gul Wali", "Gul Ziwar", "Gulabaddin", "Gulalai", "Gulbuddin", "Gulbuddin", "Guldana", "Guldasta", "Gulistan", "Gulnar", "Gulshan", "Gulsom", "Gulsom", "Gulsom", "Gulsoma", "Guzil", 
        "Habib Rahman", "Habib", "Habiba", "Habibullah", "Hadi", "Hadiqah", "Hadiseh", "Hadiya", "Hadya", "Hafasa", "Hafizah", "Hafizah", "Hafizullah", "Haider", "Hajar", "Haji Mohammad", "Hajirah", "Hajra", "Hakima", "Hakimullah", "Haley", "Halima", "Hamasa", "Hamdullah", "Hamed", "Hamedullah", "Hamid", "Hamideh", "Hamidullah", "Hamisha Gul", "Hamiyeh", "Hania", "Hanifa", "Hanifullah", "Harirah", "Haris", "Haroon", "Hasamuddin", "Hasan", "Hashima", "Hasiba", "Hasiba", "Hasila", "Hassan Ali", "Hassibullah", "Hassina", "Hawa Gul", "Hawa Gul", "Hawa", "Hawa", "Hayatullah", "Hayedeh", "Hazrat Bilal", "Hazrat Mohammad", "Hazrat Wali", "Hazratullah", "Hedayatullah", "Helal", "Helaladdin", "Hengameh", "Henna", "Heshmatullah", "Hezbullah", "Hijratullah", "Hikmatullah", "Hilah", "Himatullah", "Himayatullah", "Hiwad", "Hogi", "Hojatullah", "Homa", "Homayoun", "Hooria", "Hossein Ali", "Hossein", "Howaida", "Humaira", "Hussaina", "Hussein Dad", "Hussi", "Hussna", "Hussna", "Hussnia", 
        "Ibrahim", "Idris", "Ijazul Haq", "Ikramuddin", "Ikramullah", "Imamuddin", "Imdadullah", "Imranullah", "Iqbal", "Irfanullah", "Irshad", "Ishaq", "Islamuddin", "Ismail", 
        "Jafar", "Jahantab", "Jahanzib", "Jahidah", "Jalaluddin", "Jalil Ahmad", "Jalilah", "Jalwa", "Jamal Nasser", "Jamaluddin", "Jamil Rahman", "Jamil", "Jamila", "Jamshid", "Jan Aqa", "Jan Aqa", "Jan Mohammad", "Janat Gul", "Javad", "Javid Ahmad", "Javid", "Javidallah", "Jawahir", "Jawidah", "Juma Gul", "Juma Khan", "Jumauddin", 
        "Kabita", "Kahinat", "Kalimullah", "Kamaluddin", "Kamela", "Kamilah", "Kamran", "Karamatullah", "Karim", "Karima", "Karimullah", "Katayon", "Kawkaba", "Kazem", "Kebriya", "Khadijah", "Khair Mohammad", "Khairia", "Khairuddin", "Khairullah", "Khairunnisa", "Khal Bibi", "Khal Mohammad", "Khaled Ahmad", "Khalid", "Khalideh", "Khalil Ahmad", "Khalil", "Khalilullah", "Khalisah", "Khan Aqa", "Khan Mohammad", "Khan Wali", "Khatereh", "Khatimah", "Khatimah", "Khatool", "Khaybar", "Khorshid", "Khosrow", "Khudadad", "Khudadad", "Khujistah", "Khumari", "Khushal Khan", "Khushboo", "Khyal Mohammad", "Kifayatullah", "Kimia Gul", "Kimia", "Kishwar", "Kobra", "Kobra", "Kousar", "Krishma", 
        "Laili Mah", "Lailoma", "Lailoma", "Laiqah", "Lajward", "Lal Mohammad", "Lalah", "Lamia", "Lamia", "Latifeh", "Latifullah", "Leila", "Liaqat", "Lida", "Lily", "Lily", "Lima", "Lima", "Lina", "Liza", "Liza", "Lutfullah", "Lutfur Rahman", 
        "Madiha", "Madina", "Mah Bigum", "Mah Gul", "Mah Gul", "Mah Jabin", "Mah Jan", "Mah Pari", "Mah Rukh", "Mahabatullah", "Mahayuddin", "Mahboob", "Mahboubeh", "Mahbubullah", "Mahdieh", "Mahfozah", "Mahfuzullah", "Mahilah", "Mahira", "Mahjabin", "Mahjubah", "Mahmood", "Mahmoodah", "Mahnaz", "Mahriah", "Mahrofeh", "Mahroof", "Mahsa", "Mahshid", "Mahshoqah", "Mahtab", "Mahvash", "Maida Gul", "Maisara", "Maiwand", "Maki", "Malalai", "Maleka", "Malia", "Maliha", "Malika", "Malyar", "Manila", "Manila", "Manizha", "Mansour Ahmad", "Mansour", "Mansoureh", "Manzoora", "Maqbulah", "Maqsoud", "Mar Mar", "Marghalara", "Marghali", "Marghoba", "Marhaba", "Marhama", "Maria", "Maria", "Marina", "Marina", "Marjan", "Marwa", "Marwah", "Mary", "Maryam", "Marzieh", "Marzilla", "Marzilla", "Mashal", "Mashal", "Mashooq", "Masiha", "Masiullah", "Masoud", "Massouda", "Massoumeh", "Mastoura", "Mathira", "Matiullah", "Mawlodah", "Maymona", "Mazari", "Media", "Mehdi", "Mehr Angiz", "Mehrabuddin", "Mehrafzoon", "Mehri", "Mehrullah", "Melilla", "Melina", "Merajuddin", "Meysam", "Mikiah", "Milad", "Mina Gul", "Mina", "Mina", "Mir Ahmad", "Mir Aqa", "Mir Hamza", "Mirwais", "Mirza Muhammad", "Mitra", "Moazma", "Mobinah", "Modassir", "Mohabat", "Mohadisa", "Mohamed Bilal", "Mohamed Haris", "Mohammad Abbas", "Mohammad Abed", "Mohammad Adel", "Mohammad Afzal", "Mohammad Afzal", "Mohammad Ajmal", "Mohammad Akbar", "Mohammad Akram", "Mohammad Alam", "Mohammad Alam", "Mohammad Ali", "Mohammad Ali", "Mohammad Aman", "Mohammad Amin", "Mohammad Amin", "Mohammad Amir", "Mohammad Anwar", "Mohammad Aqa", "Mohammad Aref", "Mohammad Aref", "Mohammad Asef", "Mohammad Ashraf", "Mohammad Asif", "Mohammad Asif", "Mohammad Aslam", "Mohammad Azam", "Mohammad Azim", "Mohammad Aziz", "Mohammad Baqir", "Mohammad Bashir", "Mohammad Basir", "Mohammad Daoud", "Mohammad Dawood", "Mohammad Din", "Mohammad Din", "Mohammad Ebrahim", "Mohammad Ebrahim", "Mohammad Ehsan", "Mohammad Elyas", "Mohammad Emal", "Mohammad Essa", "Mohammad Ewaz", "Mohammad Fahim", "Mohammad Faisal", "Mohammad Farhad", "Mohammad Farid", "Mohammad Farouq", "Mohammad Fayaz", "Mohammad Fazel", "Mohammad Gul", "Mohammad Hadi", "Mohammad Hakim", "Mohammad Halim", "Mohammad Hamed", "Mohammad Haroon", "Mohammad Haroon", "Mohammad Hashim", "Mohammad Hassan", "Mohammad Hassib", "Mohammad Homayoun", "Mohammad Hussain", "Mohammad Idress", "Mohammad Idris", "Mohammad Ikram", "Mohammad Iqbal", "Mohammad Ishaq", "Mohammad Ishaq", "Mohammad Islam", "Mohammad Ismaeil", "Mohammad Ismail", "Mohammad Jafar", "Mohammad Jamil", "Mohammad Jamshid", "Mohammad Jan", "Mohammad Javad", "Mohammad Javid", "Mohammad Javid", "Mohammad Juma", "Mohammad Kabir", "Mohammad Karim", "Mohammad Kazem", "Mohammad Khaled", "Mohammad Khalid", "Mohammad Khalil", "Mohammad Khan", "Mohammad Latif", "Mohammad Mahdi", "Mohammad Mahroof", "Mohammad Mansour", "Mohammad Masoom", "Mohammad Massoud", "Mohammad Mobin", "Mohammad Mohsen", "Mohammad Mojtaba", "Mohammad Mokhtar", "Mohammad Morteza", "Mohammad Moslem", "Mohammad Musa", "Mohammad Mustafa", "Mohammad Nabi", "Mohammad Nader", "Mohammad Nadim", "Mohammad Naeem", "Mohammad Nahim", "Mohammad Nasim", "Mohammad Nasim", "Mohammad Nasir", "Mohammad Nasir", "Mohammad Nasser", "Mohammad Navid", "Mohammad Nawab", "Mohammad Nazif", "Mohammad Nazir", "Mohammad Noor", "Mohammad Numan", "Mohammad Omer", "Mohammad Omid", "Mohammad Omran", "Mohammad Osman", "Mohammad Qais", "Mohammad Qasem", "Mohammad Qasim", "Mohammad Rafi", "Mohammad Rafiq", "Mohammad Rahim", "Mohammad Rashid", "Mohammad Rasoul", "Mohammad Reza", "Mohammad Reza", "Mohammad Reza", "Mohammad Saber", "Mohammad Sabour", "Mohammad Sadegh", "Mohammad Saeed", "Mohammad Saleh", "Mohammad Salem", "Mohammad Sediq", "Mohammad Shafiq", "Mohammad Shakib", "Mohammad Sharif", "Mohammad Shoaib", "Mohammad Taher", "Mohammad Tamim", "Mohammad Taqi", "Mohammad Tariq", "Mohammad Tawfiq", "Mohammad Wali", "Mohammad Wasim", "Mohammad Yaqub", "Mohammad Yasin", "Mohammad Yasser", "Mohammad Yousuf", "Mohammad Yunis", "Mohammad Yusuf", "Mohammad Zafar", "Mohammad Zahir", "Mohammad Zakaria", "Mohammad Zaki", "Mohammad Zakir", "Mohammad Zaman", "Mohammad Zamir", "Mohammad Zarif", "Mohammad Zia", "Mohammad Zubair", "Mohammad", "Mohammed Aqa", "Mohammed Ayub", "Mohammed Firouz", "Mohammed Hussain", "Mohammed Samir", "Mohibullah", "Mohsen", "Mohsena", "Mojahid", "Mojtaba", "Mokhtar", "Momina", "Monica", "Monira", "Monisa", "Moqaddas", "Morsal", "Morteza", "Morwarid", "Moshtaq", "Moslem", "Mostafa", "Mozhda", "Mozhgan", "Mubariz", "Muhammad Fahim", "Muhammad Fawad", "Muhammad Hanif", "Muhammad Monir", "Muhammad Rafi", "Muhammad Samim", "Muhammad Sharif", "Mujibullah", "Mumlikat", "Mumtaz", "Munir", "Munizha", "Musa", 
        "Naaz Gul", "Naazi Gul", "Nabileh", "Nabiullah", "Nader Shah", "Nadia", "Nadia", "Nadima", "Nadima", "Nadir", "Nadira", "Naeem", "Nafas Gul", "Nafiseh", "Naghma", "Nagin", "Nagina", "Nagita", "Naheda", "Nahid", "Nahida", "Nahila", "Nahima", "Nahimullah", "Naira", "Najibeh", "Najibullah", "Najimah", "Najiyah", "Najla", "Najma", "Najmah", "Najmuddin", "Najwa", "Nangialay", "Naqibah", "Naqibullah", "Narges", "Narges", "Narjes", "Naroon", "Nasar Ahmad", "Nasar Ahmad", "Naseer Ahmad", "Naseer Ahmad", "Naseereh", "Naser", "Nasiba", "Nasibah", "Nasibullah", "Nasim Gul", "Nasim", "Nasima", "Nasimullah", "Nasir Khan", "Nasira", "Nasirullah", "Nasreddin", "Nasrin Gul", "Nasrin", "Nasrullah", "Nasser Ahmad", "Nasteran", "Natasha", "Navid Ahmad", "Navid", "Navideh", "Navidullah", "Nazakat", "Nazanin", "Nazar Mohammad", "Nazdana", "Nazi", "Nazia", "Nazifa", "Nazifullah", "Nazila", "Nazilah", "Nazima", "Nazir Ahmad", "Nazira", "Nazira", "Nazira", "Nazira", "Nazita", "Nazoo", "Nebila", "Negar", "Nematullah", "Niaz Mohammad", "Nidaa", "Nijila", "Nik Muhammad", "Nikbakht", "Nikbakht", "Nila", "Nilab", "Nilam", "Nilofar", "Nizamuddin", "Noda", "Noman", "Noor Ahmad", "Noor Ali", "Noor Aqa", "Noor Aqa", "Noor Bibi", "Noor Jahan", "Noor Mohammad", "Noor Rahman", "Nooradin", "Noorjan", "Noorulhaq", "Noorullah", "Nooruz Ali", "Noorzia", "Nooshin", "Noria", "Nourine", "Nowruz", "Nusratullah", 
        "Obaideh", "Obaidullah", "Obaidur Rahman", "Obeidullah", "Omar", "Omid", "Omidah", "Omidullah", "Omran", "Osman", "Ozra", "Ozra", 
        "Pakeezah", "Palwasha", "Palwasha", "Parastoo", "Pari Gul", "Pari Gul", "Pari Naaz", "Pari Naaz", "Pari", "Parisa", "Pariwash", "Parniyan", "Parvin", "Parvina", "Parviz", "Parwana", "Parwin Gul", "Pashtanah", "Pashtun", "Patoni", "Payenda Mohammad", "Payman", "Paymanah", "Permila", "Permina", "Piki", "Prima", "Priscilla", 
        "Qadirah", "Qahera", "Qais", "Qamar Gul", "Qamar", "Qamaruddin", "Qand Aqa", "Qand Aqa", "Qandi Gul", "Qandi Gul", "Qasim", "Qayamuddin", "Qodria", "Qudsia", "Quran Ali", "Qurban Ali", "Qurban", "Qutbia", "Qutratullah", 
        "Rabia", "Rabiullah", "Rafiqullah", "Rafiullah", "Rafiyah", "Raheleh", "Rahileh", "Rahimah", "Rahimullah", "Rahisah", "Rahisah", "Rahmaddin", "Rahman", "Rahmana", "Rahmanullah", "Rahmanullah", "Rahmatullah", "Rahna", "Rajab Ali", "Rakiah", "Rakiya", "Ramadan", "Ramika", "Ramin", "Ramina", "Ramish", "Ramisha", "Ramzia", "Rana Gul", "Rangina", "Raqibah", "Rashad", "Rashid", "Rashidah", "Rashidah", "Rasoul Khan", "Raufeh", "Rayhan", "Raz Mohammad", "Raziyeh", "Reyazullah", "Reyhaneh", "Reza", "Rezwan", "Rika", "Rima", "Rina", "Rita", "Rizwana", "Rizwanullah", "Robabah", "Robabeh", "Rohidah", "Rohina", "Rohina", "Rohiyah", "Rohullah", "Rokhana", "Rokhsar", "Rokhsarah", "Roma", "Roman", "Roman", "Romina", "Rommel", "Rona", "Ronaa", "Rooh Afza", "Roqia", "Roqia", "Roshan Gul", "Roshan", "Roshana", "Rosmah", "Roudabeh", "Rowina", "Roya Gul", "Roya", "Rozina", "Rozita", "Roziyah", "Rozma", "Rubina", "Ruhina", "Rustam", 
        "Saalimah", "Sabar Gul", "Sabawon", "Sabbia", "Saber", "Sabikah", "Sabira", "Sabna", "Sabria", "Sabrina", "Sabrina", "Sabrullah", "Sabza Gul", "Sabzah", "Sabzinah", "Sadaf", "Sadaqat", "Saddam Hussein", "Saddam", "Saddiqa", "Saddiqullah", "Sadiah", "Sadiq", "Sadraddin", "Sadrah", "Sadullah", "Saeedeh", "Saeedullah", "Safa", "Safiullah", "Safiyah", "Safoora", "Safoura", "Safra", "Sagher", "Sahadat", "Sahar Gul", "Sahar", "Sahel", "Sahiba", "Sahima", "Sahima", "Sahla", "Sahra", "Saif Rahman", "Saifuddin", "Saifullah", "Saima", "Saiyaara", "Sajad", "Sajideh", "Sakander", "Sakhi Mohammad", "Sakhidad", "Sakineh", "Salaghi", "Salahuddin", "Saleh Mohammad", "Saleyah", "Salim", "Salima", "Salma", "Salman", "Salsalah", "Salva", "Sama", "Saman", "Samaneh", "Samar Gul", "Samaraddin", "Samia", "Samia", "Samiha", "Samila", "Samim", "Samimah", "Samina", "Samina", "Samir Ahmad", "Samir", "Samira", "Samira", "Samira", "Samirah", "Samiul Haq", "Samiullah", "Samsour", "Samullah", "Sana", "Sanam", "Sanaullah", "Sanaullah", "Sanaullah", "Sanaz", "Sangar", "Sangi Mah", "Sania", "Sanita", "Sanobar", "Sapna", "Saqiqah", "Sara", "Sarah", "Sardar Mohammad", "Sardar Wali", "Sardar", "Sarwar", "Sawila", "Sayed Abbas", "Sayed Abdullah", "Sayed Ahmad", "Sayed Akbar", "Sayed Alem", "Sayed Ali", "Sayed Al-Rahman", "Sayed Amin", "Sayed Amir", "Sayed Aqa", "Sayed Aqa", "Sayed Aref", "Sayed Ebrahim", "Sayed Habib", "Sayed Habibullah", "Sayed Hamed", "Sayed Haroon", "Sayed Hassan", "Sayed Hussain", "Sayed Jafar", "Sayed Jalal", "Sayed Jawad", "Sayed Jawid", "Sayed Kareem", "Sayed Mahmood", "Sayed Mansour", "Sayed Massoud", "Sayed Mehdi", "Sayed Mohammad", "Sayed Mojtaba", "Sayed Morteza", "Sayed Mostafa", "Sayed Najibullah", "Sayed Naser", "Sayed Omar", "Sayed Rahim", "Sayed Rahman", "Sayed Reza", "Sayed Rohullah", "Sayed Wali", "Sayed Zabihullah", "Sayedah", "Sayera", "Sebghatullah", "Sefatullah", "Sepideh", "Setareh", "Shabana", "Shabir Ahmad", "Shabnam", "Shadab", "Shafiq", "Shafiqa", "Shafiqullah", "Shafiullah", "Shafiyah", "Shagofeh", "Shah Bibi", "Shah Gul", "Shah Jan", "Shah Mahmood", "Shah Pari", "Shah Wali", "Shahabuddin", "Shahidah", "Shahila", "Shahin", "Shahirah", "Shahirah", "Shahista", "Shahla", "Shahnaz", "Shahpour", "Shahram", "Shahrbanoo", "Shahzadah", "Shaima", "Shaker", "Shakerullah", "Shakib", "Shakiba", "Shakiba", "Shakila", "Shakila", "Shakira", "Shamahil", "Shamila", "Shamilla", "Shamim", "Shamimah", "Shamina", "Shamina", "Shamisa", "Shamla", "Shamshad", "Shamshad", "Shamsi", "Shamsia", "Shamsuddin", "Shamsul Haq", "Shamsullah", "Shapur", "Shaqaiq", "Sharafat", "Sharafat", "Sharafuddin", "Sharafuddin", "Sharara", "Sharif", "Sharifa", "Sharifullah", "Sharmila", "Shaukat", "Shayeqa", "Sher Shah", "Sherzad", "Sherzai", "Shiba", "Shida", "Shila", "Shima", "Shir Ahmad", "Shir Aqa", "Shir Hussein", "Shir Khan", "Shir Mohammad", "Shirin Gul", "Shirin", "Shiva", "Shoaib", "Shoaibullah", "Shohra", "Shokofeh", "Shokrullah", "Shukranah", "Shukria", "Siamoua", "Sili", "Sima Gul", "Sima Gul", "Sima", "Simin Gul", "Simin", "Sina", "Sirajdin", "Sita", "Siyamoo", "Sodabeh", "Sofia", "Soghra", "Soghra", "Sohbatullah", "Soheil", "Soheila", "Sohrab", "Solaiman", "Somayeh", "Sona", "Sonam", "Sonbul", "Sonia", "Sonila", "Sophia", "Soraya", "Soriah", "Sowita", "Spozhmai", "Subhanallah", "Sultan Ahmad", "Sultanah", "Sumiyah",  
        "Tabassom", "Tahereh", "Tahir", "Tahmina", "Tahmineh", "Taj Mohammad", "Tajala", "Tajuddin", "Tajwar", "Tamana", "Tamim", "Tamkin", "Tania", "Taqi", "Taranah", "Tariq", "Taus", "Tawfiq", "Tawfiqullah", "Tawhidullah", "Tayebeh", "Taza Gul", "Timur Shah", "Tofan", "Toor Pekai", "Toryalay", "Trina", "Tuba", 
        "Ulfatullah", "Uliaa", "Umulbanin", "Uranus", "Uzma", 
        "Vahidullah", "Venus", "Vida", 
        "Wadatullah", "Wafiullah", "Wahedah", "Wahedullah", "Wahid Ahmad", "Wahid", "Wahidah", "Wahideh", "Wahidullah", "Wais", "Waisuddin", "Waisullah", "Wajia", "Wajiah", "Wakil Ahmad", "Waleed", "Wali Khan", "Waliah", "Walwala", "Waris", "Wasila", "Wasim", "Wasima", "Wasiullah", "Wazhma", "Wazhma", "Wazir Ahmad", 
        "Yaganah", "Yahya", "Yalda", "Yama", "Yar Mohammad", "Yasamin", "Yasin", "Yasmin", "Yasser", "Yesna", "Younes", "Yulduz", "Yusuf", 
        "Zabiah", "Zabihullah", "Zabihullah", "Zafar Khan", "Zahed", "Zahedullah", "Zahidah", "Zahidullah", "Zahir Shah", "Zahir", "Zahira", "Zahra Gul", "Zahra", "Zahra", "Zahra", "Zaibunnisa", "Zainab", "Zainuddin", "Zainullah", "Zainullah", "Zaitonah", "Zaitoon", "Zakaria", "Zakaria", "Zaker Hussein", "Zaki", "Zakia", "Zakie", "Zakira", "Zakirullah", "Zalmai", "Zaman", "Zamanaddin", "Zamarod", "Zamir", "Zamirah", "Zamzama", "Zar Afshan", "Zar Afshan", "Zar Bibi", "Zarghi", "Zarghona", "Zarifa", "Zarina", "Zarlasht", "Zarnagar", "Zarrin Gul", "Zarrin", "Zarrina", "Zaryalay", "Zekrullah", "Zermina", "Zhila", "Zhila", "Zia Gul", "Zia Gul", "Zia Gul", "Zia Rahman", "Ziauddin", "Ziauddin", "Ziaulhaq", "Ziaulhaq", "Ziaulhaq", "Ziaullah", "Ziba Gul", "Ziba", "Zikiullah", "Zinat", "Zinoora", "Ziwar", "Ziyadah", "Ziyarmal", "Zobaida", "Zobaidullah", "Zohal", "Zohal", "Zohal", "Zohra", "Zoya", "Zubair Ahamd", "Zubair", "Zulaikha", "Zulaikha", "Zulfia", "Zulfiah"
    );

    public static function lastNameAscii()
    {
        return static::randomElement(static::$lastNameAscii);
    }

    public static function firstNameAscii()
    {
        return static::randomElement(static::$firstNameAscii);
    }

    /**
     * Only getting first character of fristName
     */
    public static function firstNameAsciiFirstChar()
    {
        return static::randomElement(static::$firstNameAscii)[0];
    }

    /**
     * Getting first character each of word from fristName
     */
    public static function firstNameAsciiFirstChars()
    {
        $string = static::randomElement(static::$firstNameAscii);
        $result = '';
        foreach (preg_split('#[^a-z]+#i', $string, -1, PREG_SPLIT_NO_EMPTY) as $word) {
            $result .= $word[0];
        }
        return static::toLower($result);
    }

    /**
     * @example 'a.sherzad'
     * @example 'ab.sherzad'
     * @example 'sherzad17'
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);
        return static::toLower(static::numerify($this->generator->parse($format)));
    }

    /**
     * @example 'sherzad.af'
     * @example 'sherzad.edu.af'
     * @example 'sherzad.gov'
     * @example 'sherzad.gov.af'
     */
    public function domainName()
    {
        return static::toLower(static::randomElement(static::$lastNameAscii) . '.' . $this->tld());
    }
}
