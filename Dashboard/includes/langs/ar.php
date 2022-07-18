<?PHP

    function lang($pheras){
        $words = array(
            // Sidebar
            "DASHBOARD"         => "لوحة التحكم",
            "EMPLOYEES"         => "الموظفين",
            "CUSTOMERS"         => "العملاء",
            "PRODUCTS"          => "المنتجات",
            "ORDERS"            => "الطلبات",
            "CATEGORIES"        => "الفئات",
            "SETTINGS"          => "الاعدادات",
            "TASKS"             => "المهام",
            "LOGOUT"            => "تسجيل الخروج",
            // Home Pages
            "CUSTCARD"          => "عملاء",
            "PRODCARD"          => "منتجات",
            "ORDECARD"          => "طلبات",
            "INCOCARD"          => "الدخل",
            "LAST"              => "اخر",
            "SEEALL"            => "الكل",
            "ID"                => "الرقم",
            "IMAGE"             => "الصورة",
            "TITLE"             => "العنوان",
            "BRAND"             => "الماركة",
            "CATEGORY"          => "الفئة",
            "PRICE"             => "السعر",
            "BY-EMP"            => "بواسطة الموظف",
            "STATUS"            => "الحالة",
            "CUSTOMER"          => "عميل",
            // Manage Page
            "ADDNEW"            => "إضافة",
            "DEPARTMENT"        => "القسم",
            "ROLE"              => "Role",
            // Employee
            "NAME"              => "الاسم",
            "AGE"               => "العمر",
            "USERNAME"          => "اسم المستخدم",
            "EMAIL"             => "الايميل",
            "JOB"               => "الوظيفة",
            "DATEHIRING"        => "تاريخ التعيين",
            "OPTIONS"           => "الاختيارات",
            "CONTROLS"          => "التحكم",
            "UNACTIVATED"       => "غير مفعل",
            "ACTIVATED"         => "مفعل",
            "EDIT"              => "تعديل",
            "DELETE"            => "حذف",
            // Employee Edit Page
            "EMP_EDIT_TITLE"    => "تعديل بيانات الموظف",
            // forms 
            "FULL_NAME"         => "الاسم الكامل",
            "EMP_NAME_REQ"      => "الاسم الكامل مطلوب",
            "EMP_USER_REQ"      => "اسم المستخدم مطلوب",
            "EMP_EMAIL_REQ"     => "الايميل مطلوب",
            "PHONE"             => "الهاتف",
            "EMP_PHONE_REQ"     => "رقم الهاتف مطلوب",
            "PASSWORD"          => "كلمة السر",
            "COUNTRY"           => "الدولة",
            "EMP_COUNTRY_REQ"   => "اسم الدولة مطلوب",
            "CITY"              => "المدينة",
            "EMP_CITY_REQ"      => "اسم المدينة مطلوب",
            
        );

        echo $words[$pheras];
    }