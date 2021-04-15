<?php

return [
    'auth' => [
        'title' => 'ส่วนการจัดการ',
        'invalid_login' => 'รายละเอียดที่คุณเพิ่มเข้ามาไม่ตรงกับข้อมูลของเรา กรุณาตรวจสอบและลองอีกครั้ง',
    ],
    'field' => [
        'invalid_type' => 'ประเภทของฟิลด์ไม่ถูกต้อง :type.',
    ],
    'widget' => [
        'not_registered' => "วิดเจทชื่อ ':name' ยังไม่ได้ถูกลงทะเบียน",
        'not_bound' => "วิดเจทชื่อ ':name' ยังไม่ได้ถูกผูกกับคอนโทรลเลอร์",
    ],
    'page' => [
        'untitled' => 'ไม่มีชื่อเรื่อง',
        'not_found' => [
            'label' => 'ไม่พบหน้านี้',
            'help' => "เราพยายามค้นหาแล้ว แต่ไม่พบ URL ที่ร้องขอ บางทีคุณกำลังหาอย่างอื่นอยู่หรือเปล่า?",
            'back_link' => 'กลับไปยังหน้าที่แล้ว',
        ],
        'access_denied' => [
            'label' => 'ไม่อนุญาตให้เข้าถึง',
            'help' => "คุณไม่มีสิทธิ์ที่จำเป็นในการดูหน้านี้",
            'cms_link' => 'กลับสู่หน้าเว็บหลังบ้าน',
        ],
        'no_database' => [
            'label' => 'ไม่พบฐานข้อมูล',
            'help' => "จำเป็นต้องมีฐานข้อมูลในการเข้าถึงหน้าเว็บหลังบ้าน ตรวจสอบว่าฐานข้อมูลได้ถูกตั้งค่าและโอนย้ายก่อนลองอีกครั้ง",
            'cms_link' => 'กลับสู่หน้าเว็บหลัก',
        ],
    ],
    'partial' => [
        'not_found_name' => "ไม่พบส่วนย่อย ':name'",
        'invalid_name' => 'ส่วนย่อยชื่อ: :name ไม่ถูกต้อง',
    ],
    'ajax_handler' => [
        'invalid_name' => 'ชื่อผู้จัดการ AJAX: :name ไม่ถูกต้อง',
        'not_found' => "หาผู้จัดการ AJAX ':name' ไม่พบ",
    ],
    'account' => [
        'impersonate' => 'ปลอมตัวเป็นผู้ใช้',
        'impersonate_confirm' => 'คุณแน่ใจว่าต้องการปลอมตัวเป็นผู้ใช้คนนี้? คุณสามารถย้อนกลับโดยการล็อกเอาท์',
        'impersonate_success' => 'คุณกำลังปลอมตัวเป็นผู้ใช้คนนี้',
        'impersonate_working' => 'กำลังปลอมตัว...',
        'impersonating' => 'กำลังปลอมตัว :full_name',
        'stop_impersonating' => 'หยุดการปลอมตัว',
        'signed_in_as' => 'ลงชื่อเข้าโดยใช้ชื่อ :full_name',
        'sign_out' => 'ลงชื่อออก',
        'login' => 'ล็อกอิน',
        'reset' => 'ตั้งใหม่',
        'login_placeholder' => 'ชื่อล็อกอิน',
        'restore' => 'กู้คืน',
        'password_placeholder' => 'รหัสผ่าน',
        'remember_me' => 'ให้ล็อกอินค้างไว้',
        'forgot_password' => 'ลืมรหัสผ่านของคุณ?',
        'enter_email' => 'ใส่ข้อมูลอีเมลของคุณ',
        'enter_login' => 'ใส่ข้อมูลล็อกอินของคุณ',
        'email_placeholder' => 'อีเมล',
        'enter_new_password' => 'ใส่ข้อมูลรหัสผ่านใหม่',
        'password_reset' => 'ตั้งค่ารหัสผ่านใหม่',
        'restore_success' => 'ได้ส่งข้อความไปทางอีเมลของคุณพร้อมด้วยขั้นตอนการทำงาน',
        'restore_error' => "ไม่เจอผู้ใช้ชื่อ ':login'",
        'reset_success' => 'ตั้งรหัสผ่านใหม่แล้ว คุณสามารถลงชื่อเข้าใช้ได้',
        'reset_error' => 'ข้อมูลที่ใช้ตั้งรหัสผ่านไม่ถูกต้อง กรุณาลองใหม่!',
        'reset_fail' => 'ไม่สามารถตั้งค่ารหัสผ่านของคุณใหม่ได้!',
        'apply' => 'นำไปใช้',
        'cancel' => 'ยกเลิก',
        'delete' => 'ลบ',
        'ok' => 'ตกลง',
    ],
    'dashboard' => [
        'menu_label' => 'แผงควบคุม',
        'widget_label' => 'วิดเจ็ท',
        'widget_width' => 'ความกว้าง',
        'full_width' => 'ความกว้างเต็มหน้า',
        'manage_widgets' => 'จัดการวิดเจ็ท',
        'add_widget' => 'เพิ่มวิดเจ็ท',
        'widget_inspector_title' => 'การปรับแต่งค่าวิดเจ็ท',
        'widget_inspector_description' => 'ปรับแต่งค่าวิดเจ็ทแบบรายงาน',
        'widget_columns_label' => 'กว้าง :columns',
        'widget_columns_description' => 'ความกว้างของวิดเจ็ท, ตัวเลขระหว่าง 1 ถึง 10',
        'widget_columns_error' => 'กรุณาใส่ค่าความกว้างของวิดเจ็ทเป็นตัวเลขระหว่าง 1 ถึง 10',
        'columns' => '{1} คอลัมน์|[2,Inf] คอลัมน์',
        'widget_new_row_label' => 'บังคับขึ้นแถวใหม่',
        'widget_new_row_description' => 'วางวิดเจ็ทไว้ในแถวใหม่',
        'widget_title_label' => 'หัวเรื่องวิดเจ็ท',
        'widget_title_error' => 'ต้องมีหัวเรื่องวิดเจ็ท',
        'reset_layout' => 'ตั้งค่าเริ่มต้นการวางโครงร่าง',
        'reset_layout_confirm' => 'ตั้งค่าการวางโครงร่างกลับสู่ค่าเริ่มต้น?',
        'reset_layout_success' => 'ตั้งค่าการวางโครงร่างเป็นค่าเริ่มต้นแล้ว',
        'make_default' => 'ทำให้เป็นค่าเริ่มต้น',
        'make_default_confirm' => 'ตั้งการวางโครงร่างปัจจุบันเป็นค่าเริ่มต้น?',
        'make_default_success' => 'ตั้งการวางโครงร่างปัจจุบันเป็นค่าเริ่มต้นแล้ว',
        'collapse_all' => 'ย่อทั้งหมด',
        'expand_all' => 'ขยายทั้งหมด',
        'status' => [
            'widget_title_default' => 'สถานะระบบ',
            'updates_pending' => 'รอการอัพเดทซอฟต์แวร์',
            'updates_nil' => 'ซอฟต์แวร์เป็นปัจจุบันแล้ว',
            'updates_link' => 'อัพเดท',
            'warnings_pending' => 'มีปัญหาบางอย่างต้องตรวจสอบ',
            'warnings_nil' => 'ไม่มีคำเตือนให้แสดง',
            'warnings_link' => 'ดู',
            'core_build' => 'ระบบ',
            'event_log' => 'บันทึกเหตุการณ์',
            'request_log' => 'บันทึกการขอเข้าใช้งาน',
            'app_birthday' => 'ออนไลน์ตั้งแต่',
        ],
        'welcome' => [
            'widget_title_default' => 'ยินดีต้อนรับ',
            'welcome_back_name' => 'ยินดีต้อนรับกลับมาสู่ :app, :name.',
            'welcome_to_name' => 'ยินดีต้อนรับสู่ :app, :name.',
            'first_sign_in' => 'นี่เป็นครั้งแรกที่คุณได้ลงชื่อเข้า',
            'last_sign_in' => 'คุณได้ลงชื่อเข้าครั้งสุดท้ายเมื่อ',
            'view_access_logs' => 'ดูบันทึกการเข้าถึง',
            'nice_message' => 'ขอให้มีวันที่ยอดเยี่ยม!',
        ],
    ],
    'user' => [
        'name' => 'ผู้ดูแลระบบ',
        'menu_label' => 'ผู้ดูแลระบบ',
        'menu_description' => 'กำหนด ผู้ใช้ กลุ่ม และสิทธิ์การใช้งาน ของหน้าเว็บหลังบ้าน',
        'list_title' => 'จัดการผู้ดูแลระบบ',
        'new' => 'สร้างผู้ดูแลระบบใหม่',
        'login' => 'ชื่อล็อกอิน',
        'first_name' => 'ชื่อ',
        'last_name' => 'นามสกุล',
        'full_name' => 'ชื่อเต็ม',
        'email' => 'อีเมล',
        'role_field' => 'บทบาท',
        'role_comment' => 'บทบาทกำหนดสิทธิ์การใช้งานของผู้ใช้ ซึ่งสามารถกำหนดทับเป็นรายผู้ใช้ได้ ที่แท็บสิทธิ์การใช้งาน',
        'groups' => 'กลุ่ม',
        'groups_comment' => 'กำหนดว่ามีกลุ่มไหนบ้างที่ผู้ใช้เป็นสมาชิก',
        'avatar' => 'อวตาร',
        'password' => 'รหัสผ่าน',
        'password_confirmation' => 'ยืนยันรหัสผ่าน',
        'permissions' => 'สิทธิ์การใช้งาน',
        'account' => 'บัญชีผู้ใช้',
        'superuser' => 'Super User',
        'superuser_comment' => 'อนุญาตให้บัญชีผู้ใช้นี้สามารถเข้าถึงได้ทุกระบบ Super user สามารถเพิ่มหรือจัดการผู้ใช้คนอื่นได้',
        'send_invite' => 'ส่งคำเชิญทางอีเมล',
        'send_invite_comment' => 'ส่งข้อความยินดีต้อนรับ พร้อมข้อมูลล็อกอินและรหัสผ่าน',
        'delete_confirm' => 'ลบผู้ดูแลระบบนี้?',
        'return' => 'กลับสู่รายชื่อผู้ดูแลระบบ',
        'allow' => 'อนุญาต',
        'inherit' => 'สืบต่อ',
        'deny' => 'ปฏิเสธ',
        'activated' => 'เริ่มการทำงานแล้ว',
        'last_login' => 'ล็อกอินครั้งสุดท้าย',
        'created_at' => 'สร้างเมื่อ',
        'updated_at' => 'อัพเดทเมื่อ',
        'deleted_at' => 'ลบเมื่อ',
        'show_deleted' => 'แสดงคนที่ถูกลบ',
        'group' => [
            'name' => 'กลุ่ม',
            'name_field' => 'ชื่อ',
            'name_comment' => 'เป็นชื่อที่ถูกแสดงผลในรายการกลุ่มในหน้าผู้ดูแลระบบ',
            'description_field' => 'รายละเอียด',
            'is_new_user_default_field_label' => 'เข้ากลุ่มอัตโนมัติ',
            'is_new_user_default_field_comment' => 'เพิ่มผู้ดูแลระบบใหม่เข้ากลุ่มนี้โดยอัตโนมัติ',
            'code_field' => 'รหัส',
            'code_comment' => 'ใส่รหัสที่ไม่ซ้ำ ถ้าคุณต้องการเข้าถึงกลุ่มผ่านทาง API',
            'menu_label' => 'จัดการกลุ่ม',
            'list_title' => 'จัดการกลุ่ม',
            'new' => 'กลุ่มใหม่',
            'delete_confirm' => 'ลบกลุ่มนี้?',
            'return' => 'กลับสู่รายชื่อกลุ่ม',
            'users_count' => 'จำนวนผู้ใช้',
        ],
        'role' => [
            'name' => 'บทบาท',
            'name_field' => 'ชื่อ',
            'name_comment' => 'เป็นชื่อที่ถูกแสดงผลในรายการบทบาทในหน้าผู้ดูแลระบบ',
            'description_field' => 'รายละเอียด',
            'code_field' => 'รหัส',
            'code_comment' => 'ใส่รหัสที่ไม่ซ้ำ ถ้าคุณต้องการเข้าถึงบทบาทผ่านทาง API',
            'menu_label' => 'จัดการบทบาท',
            'list_title' => 'จัดการบทบาท',
            'new' => 'บทบาทใหม่',
            'delete_confirm' => 'ลบบทบาทนี้?',
            'return' => 'กลับสู่รายชื่อบทบาท',
            'users_count' => 'จำนวนผู้ใช้',
        ],
        'preferences' => [
            'not_authenticated' => 'ไม่พบผู้ใช้ที่ได้รับการยืนยันแล้วสำหรับอ่านหรือบันทึกค่าที่เลือก',
        ],
        'trashed_hint_title' => 'บัญชีผู้ใช้นี้ถูกลบไปแล้ว',
        'trashed_hint_desc' => 'บัญชีผู้ใช้นี้ถูกลบไปแล้ว และจะไม่สามารถลงชื่อเข้าระบบได้ หากต้องการกู้คืน, คลิกไอคอน restore user ที่มุมล่างขวา',
    ],
    'list' => [
        'default_title' => 'รายการ',
        'search_prompt' => 'ค้นหา...',
        'no_records' => 'ไม่มีข้อมูลในหน้านี้',
        'missing_column' => 'ไม่มีการกำหนดค่าคอลัมน์ :columns.',
        'pagination' => 'แสดงข้อมูล: :from-:to จาก :total',
        'first_page' => 'หน้าแรก',
        'last_page' => 'หน้าสุดท้าย',
        'prev_page' => 'หน้าก่อน',
        'next_page' => 'หน้าถัดไป',
        'refresh' => 'รีเฟรช',
        'updating' => 'กำลังอัพเดท...',
        'loading' => 'กำลังโหลด...',
        'setup_title' => 'กำหนดค่ารายการ',
        'setup_help' => 'เลือก checkbox เพื่อเลือกคอลัมน์ที่คุณต้องการแสดงผลในตาราง คุณสามารถย้ายตำแหน่งของคอลัมน์โดยลากคอลัมน์ขึ้นหรือลง',
        'records_per_page' => 'ข้อมูลต่อหน้า',
        'records_per_page_help' => 'เลือกจำนวนข้อมูลต่อหน้าในการแสดงผล การเลือกจำนวนต่อหน้ามากๆทำให้ประสิทธิภาพลดลงได้',
        'check' => 'ตรวจสอบ',
        'delete_selected' => 'ลบรายการที่เลือกไว้',
        'delete_selected_empty' => 'ไม่มีรายการที่เลือกไว้',
        'delete_selected_confirm' => 'ต้องการลบรายการที่เลือกไว้?',
        'delete_selected_success' => 'ลบรายการที่เลือกไว้แล้ว',
        'column_switch_true' => 'ใช่',
        'column_switch_false' => 'ไม่',
    ],
    'fileupload' => [
        'attachment' => 'สิ่งที่แนบมา',
        'help' => 'เพิ่มหัวเรื่องและรายละเอียดสำหรับไฟล์แนบนี้',
        'title_label' => 'หัวเรื่อง',
        'description_label' => 'รายละเอียด',
        'default_prompt' => 'คลิก %s หรือลากไฟล์มาวางที่นี่เพื่ออัพโหลด',
        'attachment_url' => 'URL ไฟล์แนบ',
        'upload_file' => 'อัพโหลดไฟล์',
        'upload_error' => 'อัพโหลดผิดพลาด',
        'remove_confirm' => 'คุณแน่ใจ?',
        'remove_file' => 'ลบไฟล์',
    ],
    'form' => [
        'create_title' => 'สร้าง :name',
        'update_title' => 'แก้ไข :name',
        'preview_title' => 'ดูตัวอย่าง :name',
        'create_success' => 'สร้าง :name แล้ว',
        'update_success' => 'แก้ไข :name แล้ว',
        'delete_success' => 'ลบ :name แล้ว',
        'restore_success' => 'กู้คืน :name แล้ว',
        'reset_success' => 'ตั้งค่าเริ่มต้นสำเร็จ',
        'action_confirm' => 'คุณแน่ใจหรือไม่?',
        'create' => 'สร้าง',
        'create_and_close' => 'สร้าง และ ปิด',
        'creating' => 'กำลังสร้าง...',
        'creating_name' => 'กำลังสร้าง :name...',
        'save' => 'บันทึก',
        'save_and_close' => 'บันทึก และ ปิด',
        'saving' => 'กำลังบันทึก...',
        'saving_name' => 'กำลังบันทึก :name...',
        'delete' => 'ลบ',
        'deleting' => 'กำลังลบ...',
        'confirm_delete' => 'ลบข้อมูล?',
        'confirm_delete_multiple' => 'ลบข้อมูลที่เลือกไว้?',
        'deleting_name' => 'กำลังลบ :name...',
        'restore' => 'กู้คืน',
        'restoring' => 'กำลังกู้คืน',
        'confirm_restore' => 'คุณแน่ใจว่าต้องการกู้คืนข้อมูลนี้?',
        'reset_default' => 'ตั้งค่าเริ่มต้น',
        'resetting' => 'กำลังตั้งค่าเริ่มต้น',
        'resetting_name' => 'กำลังตั้งค่าเริ่มต้น :name',
        'undefined_tab' => 'อื่นๆ',
        'field_off' => 'ปิด',
        'field_on' => 'เปิด',
        'add' => 'เพิ่ม',
        'apply' => 'นำไปใช้',
        'cancel' => 'ยกเลิก',
        'close' => 'ปิด',
        'confirm' => 'ยืนยัน',
        'reload' => 'Reload',
        'complete' => 'เสร็จสมบูรณ์',
        'ok' => 'ตกลง',
        'or' => 'หรือ',
        'confirm_tab_close' => 'ปิดแท็บนี้? การเปลี่ยนแปลงที่ยังไม่ได้บันทึกจะสูญหาย',
        'preview_no_files_message' => 'ไม่มีไฟล์ถูกอัพโหลด',
        'preview_no_media_message' => 'ไม่มีสื่อบันทึกที่ถูกเลือก',
        'select' => 'เลือก',
        'select_all' => 'เลือกทั้งหมด',
        'select_none' => 'ไม่เลือกเลย',
        'select_placeholder' => 'กรุณาเลือก',
        'insert_row' => 'เพิ่มบรรทัด',
        'insert_row_below' => 'เพิ่มบรรทัดด้านล่าง',
        'delete_row' => 'ลบบรรทัด',
        'concurrency_file_changed_title' => 'ไฟล์ได้ถูกแก้ไข',
        'concurrency_file_changed_description' => "ไฟล์ที่คุณกำลังแก้ไขได้ถูกเปลี่ยนแปลงโดยผู้ใช้ท่านอื่น คุณสามารถโหลดไฟล์ใหม่แต่สิ่งที่แก้ไขไว้จะหายไป หรือบันทึกการแก้ไขทับ",
        'return_to_list' => 'กลับสู่หน้ารายการ',
    ],
    'recordfinder' => [
        'cancel' => 'ยกเลิก',
    ],
    'pagelist' => [
        'page_link' => 'ลิงก์หน้าเว็บ',
        'select_page' => 'เลือกหน้า...',
    ],
    'relation' => [
        'add' => 'เพิ่ม',
        'add_selected' => 'เพิ่มรายการที่เลือก',
        'add_a_new' => 'เพิ่มใหม่ :name',
        'link_selected' => 'ลิงก์รายการที่เลือก',
        'link_a_new' => 'ลิงก์ใหม่ :name',
        'cancel' => 'ยกเลิก',
        'close' => 'ปิด',
        'add_name' => 'เพิ่ม :name',
        'create' => 'สร้าง',
        'create_name' => 'สร้าง :name',
        'update' => 'อัพเดท',
        'update_name' => 'อัพเดท :name',
        'preview' => 'ดูตัวอย่าง',
        'preview_name' => 'ดูตัวอย่าง :name',
        'remove' => 'เอาออก',
        'remove_name' => 'เอาออก :name',
        'delete' => 'ลบ',
        'delete_name' => 'ลบ :name',
        'delete_confirm' => 'คุณแน่ใจหรือไม่?',
        'link' => 'ลิงก์',
        'link_name' => 'ลิงก์ :name',
        'unlink' => 'ยกเลิกลิงก์',
        'unlink_name' => 'ยกเลิกลิงก์ :name',
        'unlink_confirm' => 'คุณแน่ใจหรือไม่?',
    ],
    'warnings' => [
        'tips' => 'เคล็ดลับการตั้งค่าระบบ',
        'tips_description' => 'ประเด็นต่างๆที่ท่านต้องให้ความสนใจเพื่อตั้งค่าระบบได้อย่างเหมาะสม',
        'permissions' => 'โฟลเดอร์ :name หรือโฟลเดอร์ย่อยของมัน ไม่สามารถเขียนได้โดย PHP กรุณาตั้งสิทธิ์ที่สอดคล้องกับเว็บเซิร์ฟเวอร์ที่โฟลเดอร์นี้',
        'extension' => 'ส่วนต่อเติม PHP :name ไม่ถูกติดตั้ง กรุณาติดตั้งส่วนต่อเติมนี้และเปิดการใช้งานส่วนต่อเติม',
        'plugin_missing' => 'ปลั๊กอิน :name เป็น dependency แต่ไม่ถูกติดตั้ง กรุณาติดตั้งปลั๊กอินนี้',
    ],
    'editor' => [
        'menu_label' => 'การตั้งค่าตัวแก้ไข',
        'menu_description' => 'ปรับแก้ตามความชอบตัวแก้ไข เช่น ขนาดฟอนท์ และแผนผังสี',
        'font_size' => 'ขนาดฟอนท์',
        'tab_size' => 'ขนาดแท็บ',
        'use_hard_tabs' => 'ย่อหน้าโดยใช้แท็บ',
        'code_folding' => 'พับย่อโค้ด',
        'code_folding_begin' => 'ทำเครื่องหมายที่บรรทัดเริ่มต้น',
        'code_folding_begin_end' => 'ทำเครื่องหมายที่บรรทัดเริ่มต้นและสุดท้าย',
        'autocompletion' => 'การเติมคำโดยอัตโนมัติ',
        'word_wrap' => 'ขึ้นบรรทัดใหม่',
        'highlight_active_line' => 'ไฮไลท์บรรทัดที่เลือก',
        'auto_closing' => 'ปิดแท็กโดยอัตโนมัติ',
        'show_invisibles' => 'แสดงตัวอักษรที่มองไม่เห็น',
        'show_gutter' => 'แสดงเลขบรรทัด',
        'basic_autocompletion' => 'การเติมคำอัตโนมัติพื้นฐาน (คอนโทรล + สเปซ)',
        'live_autocompletion' => 'การเติมคำอัตโนมัติทันที',
        'enable_snippets' => 'เปิดใช้งาน code snippets (แท็บ)',
        'display_indent_guides' => 'แสดงแนวเส้นย่อหน้า',
        'show_print_margin' => 'แสดงขอบการพิมพ์',
        'mode_off' => 'ปิด',
        'mode_fluid' => 'ลื่นไหล',
        '40_characters' => '40 ตัวอักษร',
        '80_characters' => '80 ตัวอักษร',
        'theme' => 'แผนผังสี',
        'markup_styles' => 'รูปแบบ',
        'custom_styles' => 'กำหนด stylesheet เอง',
        'custom styles_comment' => 'รูปแบบกำหนดเองที่จะเพิ่มในตัวแก้ไข HTML',
        'markup_classes' => 'คลาส',
        'paragraph' => 'ย่อหน้า',
        'link' => 'ลิงก์',
        'table' => 'ตาราง',
        'table_cell' => 'เซลล์ตาราง',
        'image' => 'รูปภาพ',
        'label' => 'ป้ายชื่อ',
        'class_name' => 'ชื่อคลาส',
        'markup_tags' => 'แท็ก',
        'allowed_empty_tags' => 'แท็กเปล่าที่อนุญาตให้ใช้ได้',
        'allowed_empty_tags_comment' => 'รายการแท็กที่ไม่ถูกเอาออกถ้าไม่มีเนื้อหาภายในแท็ก',
        'allowed_tags' => 'แท็กที่ใช้ได้',
        'allowed_tags_comment' => 'รายการแท็กที่อนุญาตให้ใช้',
        'no_wrap' => 'แท็กที่ไม่ควรห่อ',
        'no_wrap_comment' => 'รายการแท็กที่ไม่ควรถูกห่ออยู่ในบล๊อก',
        'remove_tags' => 'เอาแท็กออก',
        'remove_tags_comment' => 'รายการของแท็กที่ถูกเอาออกรวมถึงเนื้อหาข้างใน',
        'line_breaker_tags' => 'แท็กสำหรับขึ้นบรรทัดใหม่',
        'line_breaker_tags_comment' => 'รายการของแท็กที่ให้ตัวขึ้นบรรทัดใหม่วางคั่นได้',
        'toolbar_buttons' => 'ปุ่มในแถบเครื่องมือ',
        'toolbar_buttons_comment' => 'ปุ่มในแถบเครื่องมือที่จะแสดงในหน้าแก้ไขโดยอัตโนมัติ [fullscreen, bold, italic, underline, strikeThrough, subscript, superscript, fontFamily, fontSize, |, color, emoticons, inlineStyle, paragraphStyle, |, paragraphFormat, align, formatOL, formatUL, outdent, indent, quote, insertHR, -, insertLink, insertImage, insertVideo, insertAudio, insertFile, insertTable, undo, redo, clearFormatting, selectAll, html]',
    ],
    'tooltips' => [
        'preview_website' => 'ดูตัวอย่างเว็บไซต์',
    ],
    'mysettings' => [
        'menu_label' => 'การตั้งค่าของฉัน',
        'menu_description' => 'การตั้งค่าที่เกี่ยวกับบัญชีผู้ดูแลระบบของท่าน',
    ],
    'myaccount' => [
        'menu_label' => 'บัญชีของฉัน',
        'menu_description' => 'อัพเดทรายละเอียดบัญชีผู้ใช้ของท่านเช่น ชื่อ อีเมล และรหัสผ่าน',
    ],
    'branding' => [
        'menu_label' => 'ปรับแก้หน้าเว็บหลังบ้าน',
        'menu_description' => 'ปรับแก้ส่วนจัดการระบบ เช่น ชื่อ สี และโลโก้',
        'brand' => 'เครื่องหมายการค้า',
        'logo' => 'โลโก้',
        'logo_description' => 'อัพโหลดโลโก้สำหรับใช้ในหน้าเว็บหลังบ้าน',
        'favicon' => 'ไอคอนสำหรับเว็บไซต์ (Favicon)',
        'favicon_description' => 'อัพโหลดไอคอนสำหรับเว็บไซต์สำหรับใช้ในหน้าเว็บหลังบ้าน',
        'app_name' => 'ชื่อแอป',
        'app_name_description' => 'ชื่อนี้จะถูกแสดงที่หัวเรื่องของหน้าเว็บหลังบ้าน',
        'app_tagline' => 'สโลแกนของแอป',
        'app_tagline_description' => 'สโลแกนนี้จะถูกแสดงในหน้าลงชื่อเข้าระบบของเว็บหลังบ้าน',
        'colors' => 'สี',
        'primary_color' => 'สีหลัก',
        'secondary_color' => 'สีรอง',
        'accent_color' => 'สีเน้น',
        'styles' => 'รูปแบบ',
        'custom_stylesheet' => 'กำหนด stylesheet เอง',
        'navigation' => 'ตัวนำทาง',
        'menu_mode' => 'รูปแบบเมนู',
        'menu_mode_inline' => 'อยู่ในบรรทัดเดียว',
        'menu_mode_text' => 'อยู่ในบรรทัดเดียว (ไม่มีไอคอน)',
        'menu_mode_tile' => 'กระเบื้อง',
        'menu_mode_collapsed' => 'ย่อ',
    ],
    'backend_preferences' => [
        'menu_label' => 'หน้าเว็บหลังบ้านตามใจชอบ',
        'menu_description' => 'จัดการบัญชีผู้ใช้ของคุณตามใจชอบ เช่นเลือกภาษาที่ต้องการ',
        'region' => 'ภูมิภาค',
        'code_editor' => 'ตัวแก้ไขโค้ด',
        'timezone' => 'เขตเวลา (Timezone)',
        'timezone_comment' => 'ปรับแก้การแสดงวันเวลาตามเขตเวลานี้',
        'locale' => 'ภาษาท้องถิ่น (Locale)',
        'locale_comment' => 'เลือกภาษาท้องถิ่นที่ต้องการ',
    ],
    'access_log' => [
        'hint' => 'บันทึกนี้แสดงรายการการล็อกอินที่สำเร็จโดยผู้ดูแลระบบ บันทึกจะถูกเก็บไว้เป็นเวลา :days วัน',
        'menu_label' => 'บันทึกการเข้าถึง',
        'menu_description' => 'แสดงรายการของการลงชื่อที่สำเร็จของผู้ใช้หลังบ้าน',
        'id' => 'ไอดี',
        'created_at' => 'วันเวลา',
        'type' => 'ประเภท',
        'login' => 'ชื่อล็อกอิน',
        'ip_address' => 'ไอพีแอดเดรส',
        'first_name' => 'ชื่อ',
        'last_name' => 'นามสกุล',
        'email' => 'อีเมล',
    ],
    'filter' => [
        'all' => 'ทั้งหมด',
        'date_all' => 'ช่วงเวลาทั้งหมด',
        'number_all' => 'เลขทั้งหมด',
    ],
    'import_export' => [
        'upload_csv_file' => '1. อัพโหลดไฟล์ CSV',
        'created' => 'สร้างแล้ว',
        'updated' => 'อัพเดทแล้ว',
    ],
    'permissions' => [
        'manage_media' => 'อัพโหลดและจัดการเนื้อหาสื่อบันทึก - รูปภาพ, วิดีโอ, เสียง, เอกสาร',
    ],
    'mediafinder' => [
        'label' => 'ตัวค้นหาคลังข้อมูล',
        'default_prompt' => 'คลิกปุ่ม %s เพื่อค้นหา',
        'no_image' => 'หารูปภาพไม่พบ',
    ],
    'media' => [
        'menu_label' => 'สื่อบันทึก',
        'upload' => 'อัพโหลด',
        'move' => 'ย้าย',
        'delete' => 'ลบ',
        'add_folder' => 'เพิ่มโฟลเดอร์',
        'search' => 'ค้นหา',
        'display' => 'แสดงผล',
        'filter_everything' => 'ทุกอย่าง',
        'filter_images' => 'รูปภาพ',
        'filter_video' => 'วิดีโอ',
        'filter_audio' => 'เสียง',
        'filter_documents' => 'เอกสาร',
        'library' => 'คลัง',
        'size' => 'ขนาด',
        'title' => 'หัวเรื่อง',
        'last_modified' => 'แก้ไขครั้งสุดท้าย',
        'public_url' => 'URL',
        'click_here' => 'คลิกที่นี่',
        'thumbnail_error' => 'การสร้างรูปย่อผิดพลาด',
        'return_to_parent' => 'กลับสู่โฟลเดอร์บน',
        'return_to_parent_label' => 'ไปข้างบน ..',
        'nothing_selected' => 'ไม่มีรายการที่ถูกเลือก',
        'multiple_selected' => 'มีหลายรายการถูกเลือก',
        'uploading_file_num' => 'กำลังอัพโหลด :number ไฟล์...',
        'uploading_complete' => 'อัพโหลดสำเร็จ',
        'uploading_error' => 'อัพโหลดไม่สำเร็จ',
        'type_blocked' => 'ประเภทไฟล์นี้ถูกบล๊อกเพื่อความปลอดภัย',
        'order_by' => 'เรียงลำดับโดย',
        'direction' => 'ทิศทาง',
        'direction_asc' => 'จากน้อยไปมาก',
        'direction_desc' => 'จากมากไปน้อย',
        'folder' => 'โฟลเดอร์',
        'no_files_found' => 'ไม่พบไฟล์',
        'delete_empty' => 'กรุณาเลือกไฟล์หรือโฟลเดอร์ที่ต้องการลบ',
        'delete_confirm' => 'ลบไฟล์หรือโฟลเดอร์ที่ถูกเลือก?',
        'error_renaming_file' => 'มีปัญหาการเปลี่ยนชื่อ',
        'new_folder_title' => 'โฟลเดอร์ใหม่',
        'folder_name' => 'ชื่อโฟลเดอร์',
        'error_creating_folder' => 'มีข้อผิดพลาดในการสร้างโฟลเดอร์',
        'folder_or_file_exist' => 'ไฟล์หรือโฟลเดอร์ตามชื่อนี้มีอยู่แล้ว',
        'move_empty' => 'กรุณาเลือกไฟล์หรือโฟลเดอร์ที่ต้องการย้าย',
        'move_popup_title' => 'ย้ายไฟล์หรือโฟลเดอร์',
        'move_destination' => 'โฟลเดอร์ปลายทาง',
        'please_select_move_dest' => 'กรุณาเลือกโฟลเดอร์ปลายทาง',
        'move_dest_src_match' => 'กรุณาเลือกโฟลเดอร์ปลายทางอื่น',
        'empty_library' => 'มันดูว่างๆไปหน่อยนะ เริ่มด้วยการอัพโหลดไฟล์ หรือสร้างโฟลเดอร์เลย',
        'insert' => 'แทรก',
        'crop_and_insert' => 'หั่น & แทรก',
        'select_single_image' => 'กรุณาเลือกไฟล์รูปภาพไฟล์เดียว',
        'selection_not_image' => 'รายการที่ถูกเลือกไม่ใช่รูปภาพ',
        'restore' => 'ยกเลิกการเปลี่ยนแปลง',
        'resize' => 'เปลี่ยนขนาด...',
        'selection_mode_normal' => 'ปกติ',
        'selection_mode_fixed_ratio' => 'อัตราส่วนคงที่',
        'selection_mode_fixed_size' => 'ขนาดคงที่',
        'height' => 'ความสูง',
        'width' => 'ความกว้าง',
        'selection_mode' => 'โหมดการเลือก',
        'resize_image' => 'เปลี่ยนขนาดรูปภาพ',
        'image_size' => 'ขนาดรูปภาพ:',
        'selected_size' => 'พื้นที่เลือก:',
    ],
];
