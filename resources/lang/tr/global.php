<?phpreturn [    'navbar' => [        'create_course' => 'Kurs Oluştur!',        'about' => 'Hakkımızda'    ],		'user-management' => [		'title' => 'Kullanıcı Yönetimi',		'created_at' => 'Time',		'fields' => [		],	],		'permissions' => [		'title' => 'Permissions',		'created_at' => 'Time',		'fields' => [			'title' => 'Title',		],	],		'roles' => [		'title' => 'Roles',		'created_at' => 'Time',		'fields' => [			'title' => 'Title',			'permission' => 'Permissions',		],	],		'users' => [		'title' => 'Kullanıcılar',		'created_at' => 'Time',        'login' => 'Giriş',        'register' => 'Kayıt Ol',        'existing_user' => 'Mevcut kullanıcı',		'fields' => [			'name' => 'Ad',			'email' => 'E-posta',			'password' => 'Parola',			'confirm_password' => 'Parola (Tekrar)',			'role' => 'Role',			'remember-token' => 'Remember token',		],	],		'courses' => [		'title' => 'Kurslar',        'my_courses' => 'Kurslarım',        'all_courses' => 'Tüm Kurslar',		'created_at' => 'Time',		'fields' => [			'teachers' => 'Teachers',			'title' => 'Title',			'slug' => 'Slug',			'description' => 'Description',			'price' => 'Price',			'course-image' => 'Course image',			'start-date' => 'Start date',			'published' => 'Published',		],	],		'lessons' => [		'title' => 'Lessons',		'created_at' => 'Time',		'fields' => [			'course' => 'Course',			'title' => 'Title',			'slug' => 'Slug',			'lesson-image' => 'Lesson image',			'short-text' => 'Short text',			'full-text' => 'Full text',			'position' => 'Position',			'downloadable-files' => 'Downloadable files',			'free-lesson' => 'Free lesson',			'published' => 'Published',		],	],		'questions' => [		'title' => 'Questions',		'created_at' => 'Time',		'fields' => [			'question' => 'Question',			'question-image' => 'Question image',			'score' => 'Score',		],	],		'questions-options' => [		'title' => 'Questions options',		'created_at' => 'Time',		'fields' => [			'question' => 'Question',			'option-text' => 'Option text',			'correct' => 'Correct',		],	],		'tests' => [		'title' => 'Tests',		'created_at' => 'Time',		'fields' => [			'course' => 'Course',			'lesson' => 'Lesson',			'title' => 'Title',			'description' => 'Description',			'questions' => 'Questions',			'published' => 'Published',		],	],	'app_create' => 'Oluştur',	'app_save' => 'Kaydet',	'app_edit' => 'Düzenle',	'app_view' => 'Göster',	'app_update' => 'Güncelle',	'app_list' => 'Liste',	'app_no_entries_in_table' => 'No entries in table',	'custom_controller_index' => 'Custom controller index.',	'app_logout' => 'Çıkış',	'app_add_new' => 'Yeni ekle',	'app_are_you_sure' => 'Are you sure?',	'app_back_to_list' => 'Back to list',	'app_dashboard' => 'Dashboard',	'app_delete' => 'Sil',	'global_title' => 'Splinter Usta',    'copyright' => 'Tüm hakları saklıdır'];