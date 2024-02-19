<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//////////////////////////////////////////////////////////////////////////////////
//execute qry
class excu
{
    public $mysqli;
    public $value; // Declare the property explicitly
    public function __construct()
    {
        require_once '../include/dbcon.php';
        $this->mysqli = $mysqli; // Make $mysqli accessible within the class
    }
    public function executeqry()
    {
        // Execute SQL query
        $sql = $this->value;
      //  $mysqli = $this->mysqli;
        if ($this->mysqli->query($sql) === TRUE) {
            echo "Table created successfully<hr/><br/>";
          // return true;
        } else {
            echo "Error creating table: " . $this->mysqli->error;
        }
    }
}
//////////////////////////////////////////////////////////////////////////////////
// table create
class tableCreate
{
        public $createTB;
        public function __construct()
        {
            $this->createTB = new excu();
        }

        // front page1_one
        public function front_pg_one()
        {
            // SQL to create table if not exists
            $frn = "CREATE TABLE IF NOT EXISTS front_pg_one (
                pg_one_id INT(255) AUTO_INCREMENT PRIMARY KEY,
                paragraph TEXT)";
            $this->createTB->value = $frn; // Set the value property
            $this->createTB->executeqry();
        }
        //front page2_two
        public function font_pg_two(){
            $fTwopg = "CREATE TABLE IF NOT EXISTS front_pg_two (
                pg_two_id INT(255) AUTO_INCREMENT PRIMARY KEY,
                paragraph1 TEXT,
                paragraph2 TEXT,
                paragraph3 TEXT,
                paragraph4 TEXT,
                paragraph5 TEXT
            )";
            $this->createTB->value = $fTwopg; // Set the value property
            $this->createTB->executeqry();
        }
        //vision_mission
        public function vision_mission(){
            // Table does not exist, so create it
            $vm = "CREATE TABLE IF NOT EXISTS vision_mission (
                v_m_id INT(255) AUTO_INCREMENT PRIMARY KEY,
                small_paragraph TEXT,
                vision_paragraph TEXT,
                mission_paragraph TEXT
            )";
            $this->createTB->value = $vm; // Set the value property
            $this->createTB->executeqry();
        }
        //call to us
        public function callToUs(){
            // Table does not exist, so create it
            $clu = "CREATE TABLE IF NOT EXISTS call_to_us (
                ctu_id INT(255) AUTO_INCREMENT PRIMARY KEY,
                sch_name VARCHAR(255),
                paragraph_call TEXT,
                address TEXT,
                telephone_number1 VARCHAR(15),
                telephone_number2 VARCHAR(15),
                location_gps TEXT
            )";
           $this->createTB->value = $clu; // Set the value property
           $this->createTB->executeqry();
       }
        //quiz
        public function quiz(){
            // Table does not exist, so create it
            $qiz = "CREATE TABLE IF NOT EXISTS qiztb (
                qiz_id INT(255) AUTO_INCREMENT PRIMARY KEY,
                quiz TEXT DEFAULT NULL,
                answer TEXT DEFAULT NULL
            )";
           $this->createTB->value = $qiz; // Set the value property
           $this->createTB->executeqry();
       }      
        //event
        public function event(){
            // Table does not exist, so create it
            $event = "CREATE TABLE IF NOT EXISTS event (
                event_id INT(255) AUTO_INCREMENT PRIMARY KEY,
                event_header TEXT,
                event_description TEXT,
                publish_date DATETIME,
                image VARCHAR(255)
            )";
           $this->createTB->value = $event; // Set the value property
           $this->createTB->executeqry();
       }       
        //login_history
        public function login_historyFn(){
            // Table does not exist, so create it
            $lghstry = "CREATE TABLE IF NOT EXISTS login_history (
                login_history_id INT(255) AUTO_INCREMENT PRIMARY KEY,
                emp_id INT(255),
                log_date_and_time DATETIME
            )";
           $this->createTB->value = $lghstry; // Set the value property
           $this->createTB->executeqry();
       }     
    //suppier user
        public function supper_userFn() {
            // Table does not exist, so create it
            $createTableQuery = "CREATE TABLE IF NOT EXISTS super_user (
                empid INT(255) AUTO_INCREMENT PRIMARY KEY,
                user_name VARCHAR(255) NOT NULL,
                passwordsec VARCHAR(255) NOT NULL,
                email VARCHAR(255) DEFAULT NULL,
                Imgsppusr VARCHAR(255) DEFAULT NULL,
                Code VARCHAR(255) DEFAULT NULL
            )";
            // Set the starting value and increment for the auto-increment column
            $alterTableQuery = "ALTER TABLE super_user AUTO_INCREMENT = 2";
            // Create a trigger to enforce the upper limit
            $createTriggerQuery = "
                CREATE TRIGGER before_insert_super_user
                BEFORE INSERT ON super_user
                FOR EACH ROW
                BEGIN
                    DECLARE next_empid INT;
                    -- Find the next auto-increment value
                    SELECT AUTO_INCREMENT INTO next_empid
                    FROM information_schema.TABLES
                    WHERE TABLE_SCHEMA = DATABASE()
                    AND TABLE_NAME = 'super_user';
                    -- Check if the next value exceeds the limit (10 in this case)
                    IF next_empid > 10 THEN
                        SIGNAL SQLSTATE '45000'
                        SET MESSAGE_TEXT = 'Cannot insert more rows, reached the limit.';
                    END IF;
                END";
            // Assuming $this->createTB->executeqry() executes the SQL query
            $this->createTB->value = $createTableQuery;
            $this->createTB->executeqry();
            $this->createTB->value = $alterTableQuery;
            $this->createTB->executeqry();
            $this->createTB->value = $createTriggerQuery;
            $this->createTB->executeqry();
        }
    //teacher
        public function teacherFn() {
            // Table does not exist, so create it
           $createTableQuery = "CREATE TABLE IF NOT EXISTS employ_teacher (
                empid INT(255) AUTO_INCREMENT PRIMARY KEY,
                user_name VARCHAR(255) NOT NULL,
                passwordsec VARCHAR(255) NOT NULL,
                codeR VARCHAR(255) DEFAULT NULL
            )";
            // Set the starting value and increment for the auto-increment column
            $alterTableQuery = "ALTER TABLE employ_teacher AUTO_INCREMENT = 11";
            // Assuming $this->createTB->executeqry() executes the SQL query
            $this->createTB->value = $createTableQuery;
            $this->createTB->executeqry();
            $this->createTB->value = $alterTableQuery;
            $this->createTB->executeqry();
            $createTableQuery2 = "CREATE TABLE IF NOT EXISTS employ_detail1 (
                empid INT(255) AUTO_INCREMENT PRIMARY KEY,
                frist_name VARCHAR(255) DEFAULT NULL,
                last_name VARCHAR(255) DEFAULT NULL,
                address VARCHAR(255) DEFAULT NULL,
                contact_number VARCHAR(255) DEFAULT NULL,
                email VARCHAR(255) DEFAULT NULL,
                NIC VARCHAR(255) DEFAULT NULL,
                location_or_city VARCHAR(255) DEFAULT NULL,
                image VARCHAR(255) DEFAULT NULL,
                FOREIGN KEY (empid) REFERENCES employ_teacher(empid)
            )";
                $this->createTB->value = $createTableQuery2;
                $this->createTB->executeqry();
            $createTableQuery3 = "CREATE TABLE IF NOT EXISTS emp_detail2 (
                file_id INT(255) AUTO_INCREMENT PRIMARY KEY,
                empid INT(255),
                emp_file TEXT DEFAULT NULL,
                FOREIGN KEY (empid) REFERENCES employ_detail1(empid)
            )";
                $this->createTB->value = $createTableQuery3;
                $this->createTB->executeqry();
} 
    //classTb
    public function classes() {
        // Table does not exist, so create it
        $createTableQuery = "CREATE TABLE IF NOT EXISTS classTb (
            class_id INT(255) AUTO_INCREMENT PRIMARY KEY,
            class_name TEXT,
            start_date_of_class DATE NOT NULL,
            end_date_of_class DATE DEFAULT NULL
        )";
        // Set the starting value and increment for the auto-increment column
        $alterTableQuery = "ALTER TABLE classTb AUTO_INCREMENT = 1000";
        // Assuming $this->createTB->executeqry() executes the SQL query
        $this->createTB->value = $createTableQuery;
        $this->createTB->executeqry();
        $this->createTB->value = $alterTableQuery;
        $this->createTB->executeqry();
    }
    //subject
    public function subjetTb() {
        // Table does not exist, so create it
        $createTableQuery = "CREATE TABLE IF NOT EXISTS subjetTb (
            subjetid INT(255) AUTO_INCREMENT PRIMARY KEY,
            subject_name TEXT
        )";
        // Set the starting value and increment for the auto-increment column
        $alterTableQuery = "ALTER TABLE subjetTb AUTO_INCREMENT = 10000";
        // Assuming $this->createTB->executeqry() executes the SQL query
        $this->createTB->value = $createTableQuery;
        $this->createTB->executeqry();
        $this->createTB->value = $alterTableQuery;
        $this->createTB->executeqry();
    }
    //timeTbaleTb
    public function timeTbaleTb() {
        // Table does not exist, so create it
        $createTableQuery = "CREATE TABLE IF NOT EXISTS time_table (
            time_table_id INT(255) AUTO_INCREMENT PRIMARY KEY,
            class_id INT(255) NOT NULL,
            subject_id INT(255) NOT NULL,
            date_timeTable DATE NOT NULL,
            start_time TIME NOT NULL,
            end_time TIME NOT NULL,
            trvid INT(255) DEFAULT NULL
        )";
        // Assuming $this->createTB->executeqry() executes the SQL query
        $this->createTB->value = $createTableQuery;
        $this->createTB->executeqry();
        $createTableQuery2 = "CREATE TABLE IF NOT EXISTS confirm_time_table (
            time_table_id INT(255) PRIMARY KEY,
            empid INT(255) NOT NULL,
            confirmation_session TINYINT(1) DEFAULT 0,
            transfer_session TINYINT(1) DEFAULT 0,
            FOREIGN KEY (time_table_id) REFERENCES time_table(time_table_id)
        )";
            $this->createTB->value = $createTableQuery2;
            $this->createTB->executeqry();
        $createTableQuery3 = "CREATE TABLE IF NOT EXISTS time_table_session_transfer (
            time_table_id INT(255) PRIMARY KEY,
            take_empid INT(255) NOT NULL,
            confirmation_session TINYINT(1) DEFAULT 0
        )";
            $this->createTB->value = $createTableQuery3;
            $this->createTB->executeqry();
    } 
    //DSlGen_detail
    public function DSlGen_detail() {
    // Table does not exist, so create it
        $createTableQuery = "CREATE TABLE IF NOT EXISTS day_salary_gen_details (
            DSlGen_detail_id INT(255) AUTO_INCREMENT PRIMARY KEY,
            empid INT(255) DEFAULT NULL,
            description TEXT DEFAULT NULL,
            published_date DATE DEFAULT NULL,
            salary_base DECIMAL(10, 2) DEFAULT 0,
            published_sessionID INT(255) DEFAULT NULL
        )";
        // Assuming $this->createTB->executeqry() executes the SQL query
        $this->createTB->value = $createTableQuery;
        $this->createTB->executeqry();
    }     
/*
TODO: day salary generated 
*/
    public function day_salary_gen() {
    // Table does not exist, so create it
       $createTableQuery = "CREATE TABLE IF NOT EXISTS day_salary_gen (
    day_slry_gen_id INT(255) AUTO_INCREMENT PRIMARY KEY,
    empid INT(255) DEFAULT NULL,
    DSlGen_detail_id INT(255) DEFAULT NULL,
    time_table_id INT(255) DEFAULT NULL,
    date_generated DATE DEFAULT NULL,
    calculate_hour DECIMAL(65,2) DEFAULT 0,
    total_salary_day DECIMAL(65,2) DEFAULT 0,
    trv_gen DECIMAL(65,2) DEFAULT 0)";
        // Assuming $this->createTB->executeqry() executes the SQL query
        $this->createTB->value = $createTableQuery;
        $this->createTB->executeqry();
    }     
/*
TODO: travel_al_infor
*/
    public function travel_al_infor() {
    // Table does not exist, so create it
        $createTableQuery = "CREATE TABLE IF NOT EXISTS travel_al_infor (
    trv_infor_id INT(255) AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(255) DEFAULT NULL,
    Description TEXT  DEFAULT NULL)";
        // Assuming $this->createTB->executeqry() executes the SQL query
        $this->createTB->value = $createTableQuery;
        $this->createTB->executeqry();
    }       
/*
TODO: traveling_allovanceTB
*/
    public function traveling_allovanceTB() {
    // Table does not exist, so create it
        $createTableQuery = "CREATE TABLE IF NOT EXISTS traveling_allovanceTB (
    trv_id INT(255) AUTO_INCREMENT PRIMARY KEY,
    trv_infor_id INT(255) DEFAULT NULL,
    published_date DATE DEFAULT NULL,
    pay_tvel_allovance DECIMAL(65, 2) DEFAULT 0)";
        // Assuming $this->createTB->executeqry() executes the SQL query
        $this->createTB->value = $createTableQuery;
        $this->createTB->executeqry();
    }   
/*
TODO: monthly_salary_allowance_range
*/
    public function monthly_salary_allowance_range() {
    // Table does not exist, so create it
        $createTableQuery = "CREATE TABLE IF NOT EXISTS monthly_salary_allowance_range (
        slry_id INT(255) AUTO_INCREMENT PRIMARY KEY,
        start_salary_range DECIMAL(62, 2) NOT NULL,
        end_salary_range DECIMAL(62, 2) NOT NULL,
        allowance_price DECIMAL(62, 2) NOT NULL)";
        // Assuming $this->createTB->executeqry() executes the SQL query
        $this->createTB->value = $createTableQuery;
        $this->createTB->executeqry();
    }  
/*
TODO: monthly_salary_allowance_range
*/
    public function monthly_event_salaryAdd() {
    // Table does not exist, so create it
        $createTableQuery = "CREATE TABLE IF NOT EXISTS monthly_add_eventAllowance (
        slry_allowance_event_id INT(255) AUTO_INCREMENT PRIMARY KEY,
        slry_allowance_event_description TEXT NOT NULL,
        slry_allowance_event_description_date DATE NOT NULL,
        slry_allowance_event_description_price DECIMAL(62, 2) NOT NULL,
        empid INT(255) NOT NULL,
        confirm int(1) DEFAULT 0 )";
        // Assuming $this->createTB->executeqry() executes the SQL query
        $this->createTB->value = $createTableQuery;
        $this->createTB->executeqry();
    }        
/*
TODO: loanTB
*/
    public function loansec() {
    // Table does not exist, so create it
       $createTableQuery = "CREATE TABLE IF NOT EXISTS loanTB (
    loanSec_id INT(255) AUTO_INCREMENT PRIMARY KEY,
    loanSec_description TEXT NOT NULL,
    loanSec_description_date DATE NOT NULL,
    loanSec_price DECIMAL(62, 2) NOT NULL,
    empid INT(255) NOT NULL,
    confirm INT(1) DEFAULT 0)";
        // Assuming $this->createTB->executeqry() executes the SQL query
        $this->createTB->value = $createTableQuery;
        $this->createTB->executeqry();

        // Table does not exist, so create it
       $createTableQuery2 = "CREATE TABLE IF NOT EXISTS Loans_Installment (
    loanSec_id INT(255),
    Month_gen date NOT NULL,
    Installment DECIMAL(65, 2),
    confirm_instalment INT(1) DEFAULT 0,
    FOREIGN KEY (loanSec_id) REFERENCES loanTB(loanSec_id))";
        // Assuming $this->createTB->executeqry() executes the SQL query
        $this->createTB->value = $createTableQuery2;
        $this->createTB->executeqry();

    }   
    
    
    
/*
TODO: monthlySubtotal
*/
    public function monthlySubtotal() {
    // Table does not exist, so create it
        $createTableQuery = "CREATE TABLE IF NOT EXISTS monthlySubtotal (
    monthly_salary_sub_id INT(255) AUTO_INCREMENT PRIMARY KEY,
    Msub_empid INT(255) NOT NULL,
    Msub_date DATE NOT NULL,
    Msub_day_salary_gen_last_id INT(255) DEFAULT NULL,
    Msub_day_salary_Total_schedule DECIMAL(62, 2) DEFAULT 0,
    Msub_slry_bonus_last_id INT(255) DEFAULT NULL,
    Msub_slry_bonus_Total DECIMAL(62, 2) DEFAULT 0,
    Msub_transport_last_id INT(255) DEFAULT NULL,
    Msub_transport_last_Totals DECIMAL(62, 2) DEFAULT 0,
    Msub_event_last_id INT(255) DEFAULT NULL,    
    Msub_event_last_Total DECIMAL(62, 2) DEFAULT 0, 
    Msub_loan_last_id INT(255) DEFAULT NULL, 
    Msub_loan_last_Total DECIMAL(62, 2) DEFAULT 0, 
    Msub_confirm INT(1) DEFAULT 0)";
        // Assuming $this->createTB->executeqry() executes the SQL query
        $this->createTB->value = $createTableQuery;
        $this->createTB->executeqry();
    }  
/*
TODO: monthlyLastTT
*/
    public function monthlyLastTT() {
    // Table does not exist, so create it
       $createTableQuery = "CREATE TABLE IF NOT EXISTS monthlyLastTotal (
    monthly_salary_lst_id INT(255) AUTO_INCREMENT PRIMARY KEY,
    Mlst_empid INT(255) NOT NULL,
    Mlst_date DATE NOT NULL,
    Mnet_salary DECIMAL(62, 2) DEFAULT 0,
    Mbonus DECIMAL(62, 2) DEFAULT 0,
    Msub_confirm INT(1) DEFAULT 0)";
        // Assuming $this->createTB->executeqry() executes the SQL query
        $this->createTB->value = $createTableQuery;
        $this->createTB->executeqry();
    }         
/*
TODO: permissionManager
*/
    public function permissionManager() {
    // Table does not exist, so create it
       $createTableQuery = "CREATE TABLE IF NOT EXISTS permissionManagerTb (
    permissionID INT(255) AUTO_INCREMENT PRIMARY KEY,
    empid INT(255) NOT NULL,
    permission  VARCHAR(255) NOT NULL)";
        // Assuming $this->createTB->executeqry() executes the SQL query
        $this->createTB->value = $createTableQuery;
        $this->createTB->executeqry();

        $createTableQuery2 = "CREATE TABLE IF NOT EXISTS permissionTb (
    pmID INT(255) AUTO_INCREMENT PRIMARY KEY,
    permission_description  VARCHAR(255) NOT NULL,
    permission_code  VARCHAR(255) NOT NULL)";

        $this->createTB->value = $createTableQuery2;
        $this->createTB->executeqry();

                $createTableQuery3 = "INSERT INTO `permissionTb` (`permission_description`, `permission_code`) VALUES
        ('Home Page', 'dpnCol100'),
        ('own profile sec (all)', 'dpnCol101'),
        ('Add the supper user', 'dpnCol102'),
        ('Modernization 1', 'dpnCol103'),
        ('Modernization 2', 'dpnCol104'),
        ('Modernization 3', 'dpnCol105'),
        (' Modernization 4', 'dpnCol106'),
        ('Add event', 'dpnCol107'),
        ('Enlist Educator', 'dpnCol108'),
        ('Establish Subject And Schema', 'dpnCol109'),
        ('Establish Class', 'dpnCol110'),
        ('Arrange Timetable', 'dpnCol111'),
        ('Define Hourly Pay Criteria', 'dpnCol112'),
        ('Transport Benefit Criteria', 'dpnCol113'),
        ('Define Salary Bands', 'dpnCol114'),
        ('Detail Salary Criteria', 'dpnCol115'),
        ('Credit Section', 'dpnCol116'),
        ('Teacher Details', 'dpnCol117'),
        ('Approve Schedule', 'dpnCol118'),
        ('My Performance', 'dpnCol119'),
        ('My salary calculator', 'dpnCol120'),
        ('permission', 'dpnCol124'),
        ('Look all teachers Detail', 'dpnCol125'),
        ('Look salary calculation', 'dpnCol126'),
        ('Summery Schema For Staff', 'dpnCol127'),
        ('Summery Schema For Teacher', 'dpnCol128'),
        ('Report', 'dpnCol129')
        ";

        $this->createTB->value = $createTableQuery3;
        $this->createTB->executeqry();
    }    
    
        // tb_admin
        public function tb1_adm()
        {
           try {
                //code...
           
            $admTableQuery = "CREATE TABLE IF NOT EXISTS adm (
                empid INT(255) AUTO_INCREMENT PRIMARY KEY,
                codeR VARCHAR(255) DEFAULT NULL,
                username VARCHAR(255),
                email VARCHAR(255) DEFAULT NULL,
                passwordsec VARCHAR(255)
            )";
            $createTriggerQuery = "
                CREATE TRIGGER before_insert_adm
                BEFORE INSERT ON adm
                FOR EACH ROW
                BEGIN
                    DECLARE next_empid INT;
                    -- Find the next auto-increment value
                    SELECT AUTO_INCREMENT INTO next_empid
                    FROM information_schema.TABLES
                    WHERE TABLE_SCHEMA = DATABASE()
                    AND TABLE_NAME = 'adm';
                    -- Check if the next value exceeds the limit (1 in this case)
                    IF next_empid > 1 THEN
                        SIGNAL SQLSTATE '45000'
                        SET MESSAGE_TEXT = 'Cannot insert more rows, reached the limit.';
                    END IF;
                END
            ";
            // Assuming $this->createTB->executeqry() executes the SQL query
            $this->createTB->value = $admTableQuery;
            $this->createTB->executeqry();
            $this->createTB->value = $createTriggerQuery;
            $this->createTB->executeqry();

            $admUser = "Daphneadm";
            $Daphnepass = "Daphne0055";
            $admIn = "INSERT INTO `adm`(`username`, `passwordsec`) VALUES ('$admUser', SHA2('$Daphnepass', 256))";
            $this->createTB->value = $admIn;
            $this->createTB->executeqry();

            print("Please save username and password. only one time this page work" . "\n <br/>");
            print("**admin Username  :  " . $admUser . "\n <br/>");
            print("**admin password   :  " . $Daphnepass . "\n <br/>");
            
            $spusr = "INSERT INTO `permissionManagerTb`(`empid`, `permission`) VALUES 
            ('1','dpnCol100'),
            ('1','dpnCol101'),
            ('1','dpnCol102'),
            ('1','dpnCol103'),
            ('1','dpnCol104'),
            ('1','dpnCol105'),
            ('1','dpnCol106'),
            ('1','dpnCol107'),
            ('1','dpnCol108'),
            ('1','dpnCol109'),
            ('1','dpnCol110'),
            ('1','dpnCol111'),
            ('1','dpnCol112'),
            ('1','dpnCol113'),
            ('1','dpnCol114'),
            ('1','dpnCol115'),
            ('1','dpnCol116'),
            ('1','dpnCol117'),
            ('1','dpnCol120'),
            ('1','dpnCol124'),            
            ('1','dpnCol125'),
            ('1','dpnCol126'),
            ('1','dpnCol127'),
            ('1','dpnCol129')";
            $this->createTB->value = $spusr;
            $this->createTB->executeqry();

             } catch (PDOException $e) {
            // Handle any exceptions (e.g., display an error message)
            echo "Error: " . $e;
            }
        }
/*
TODO: Send Msg
*/
    public function sendMSG() {
    // Table does not exist, so create it
        $createTableQuery = "CREATE TABLE IF NOT EXISTS clientmsg (
    clid INT(255) AUTO_INCREMENT PRIMARY KEY,
    nameofcld VARCHAR(255) NOT NULL,
    email  VARCHAR(255) NOT NULL,
    SUBJ  VARCHAR(255) NOT NULL,
    Masg  TEXT NOT NULL)";
        // Assuming $this->createTB->executeqry() executes the SQL query
        $this->createTB->value = $createTableQuery;
        $this->createTB->executeqry();
    }   

/*
TODO: subject_schema_summery
*/
    public function subject_schema_summery() {
    // Table does not exist, so create it
        $createTableQuery = "CREATE TABLE IF NOT EXISTS subject_and_schema_summery(
    summery_id INT(255) AUTO_INCREMENT PRIMARY KEY,
    year_monthcl DATE NOT NULL,   
    -- SP TR EXERCS & POEMS
    sp_tr_exercs_blank_page_book TEXT NOT NULL,
    sp_tr_exercs_progress INT(3) DEFAULT 100,
    sp_tr_exercs_action INT(3) DEFAULT 0,
    sp_tr_exercs_review_teacher TEXT DEFAULT NULL,
    sp_tr_exercs_review_staff TEXT DEFAULT NULL,
    
    -- VOCABULARY (Add columns as needed)
    vocabulary_abc_book TEXT NOT NULL,
    vocabulary_progress INT(3) DEFAULT 100,
    vocabulary_action INT(3) DEFAULT 0,
    vocabulary_review_teacher TEXT DEFAULT NULL,
    vocabulary_review_staff TEXT DEFAULT NULL,
    
    -- IDENTIFICATION OF LETTERS, NUMBERS, SHAPES & COLOURS (Add columns as needed)
    identification_abc_book TEXT NOT NULL,
    identification_progress INT(3) DEFAULT 100,
    identification_action INT(3) DEFAULT 0,
    identification_review_teacher TEXT DEFAULT NULL,
    identification_review_staff TEXT DEFAULT NULL,
    
    -- CONVERSATION, GREETINGS & COURTESIES (Add columns as needed)
    conversation_and_instruct TEXT NOT NULL,
    conversation_and_instruct_2 TEXT NOT NULL,    
    conversation_progress INT(3) DEFAULT 100,
  
    
    -- INSTRUCTIONS (Add columns as needed)
    conversation_action INT(3) DEFAULT 0,
    conversation_review_teacher TEXT DEFAULT NULL,
    conversation_review_staff TEXT DEFAULT NULL,
    
    -- READING (Add columns as needed)
    reading_gunasenas_book TEXT NOT NULL,
    reading_progress INT(3) DEFAULT 100,
    reading_action INT(3) DEFAULT 0,
    reading_review_teacher TEXT DEFAULT NULL,
    reading_review_staff TEXT DEFAULT NULL,
    
    -- WRITING (Add columns as needed)
    writing_ladybird_book TEXT NOT NULL,
    writing_progress INT(3) DEFAULT 100,
    writing_action INT(3) DEFAULT 0,
    writing_review_teacher TEXT DEFAULT NULL,
    writing_review_staff TEXT DEFAULT NULL,
    class INT(255),
    empid INT(255)
    )";
        // Assuming $this->createTB->executeqry() executes the SQL query
        $this->createTB->value = $createTableQuery;
        $this->createTB->executeqry();
    }   

    
}

$mysql_create = new tableCreate();

$mysql_create->front_pg_one();
echo PHP_EOL;
$mysql_create->font_pg_two();
echo PHP_EOL;
$mysql_create->vision_mission();
echo PHP_EOL;
$mysql_create->callToUs();
echo PHP_EOL;
$mysql_create->quiz();
echo PHP_EOL;
$mysql_create->event();
echo PHP_EOL;
$mysql_create->login_historyFn();
echo PHP_EOL;
$mysql_create->supper_userFn();
echo PHP_EOL;
$mysql_create->teacherFn();
echo PHP_EOL;
$mysql_create->classes();
echo PHP_EOL;
$mysql_create->subjetTb();
echo PHP_EOL;
$mysql_create->timeTbaleTb();
echo PHP_EOL;
$mysql_create->DSlGen_detail();
echo PHP_EOL;
$mysql_create->day_salary_gen();
echo PHP_EOL;
$mysql_create->travel_al_infor();
echo PHP_EOL;
$mysql_create->traveling_allovanceTB();
echo PHP_EOL;
$mysql_create->monthly_salary_allowance_range();
echo PHP_EOL;
$mysql_create->monthly_event_salaryAdd();
echo PHP_EOL;
$mysql_create->loansec();
echo PHP_EOL;
$mysql_create->monthlySubtotal();
echo PHP_EOL;
$mysql_create->monthlyLastTT();
echo PHP_EOL;
$mysql_create->permissionManager();
echo PHP_EOL;
$mysql_create->tb1_adm(); 
echo PHP_EOL;
$mysql_create->sendMSG();
echo PHP_EOL;
$mysql_create->subject_schema_summery();

////////////////////////////////////////////////////////////////////////////
//Daphne0055


?>