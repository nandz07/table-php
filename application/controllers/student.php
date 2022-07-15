<?php
defined('BASEPATH') or exit('No direct script access allowed');

class student extends CI_Controller
{
	
	public function index()
	{
		$sql = "select * from student";
		$query = $this->db->query($sql);
		$data["data"] = $query->result();
		$this->load->view('welcome_message', $data);
	}
	public function edit($id)
	{
		$sql = "select * from student where id=$id";
		$query = $this->db->query($sql);
		$data["data"] = $query->result();
		$this->load->view('edit_view', $data);
	}
	public function update()
	{
		$id = $this->input->post("id");
		$name = $this->input->post("name");
		$phno = $this->input->post("phno");
		$gender = $this->input->post("gender");

		$sql = "update student set student_name='$name',phone_number='$phno',genter='$gender' where id='$id'";
		$res = $this->db->query($sql);
		if ($res) {
?>
			<script>
				alert("updated the value successfully")
				window.location.href = '<?php echo base_url(); ?>student/index'
			</script>
		<?php
		}
	}
	public function insert()
	{
		$this->load->view("insert_view");
	}
	public function insertProcess()
	{

		$name = $this->input->post("name");
		$phno = $this->input->post("phno");
		$gender = $this->input->post("gender");

		$sql = "insert into student values('','$name','$phno','$gender')";
		$res = $this->db->query($sql);
		if ($res) {
		?>
			<script>
				alert("inserted the value successfully")
				window.location.href = '<?php echo base_url(); ?>student/index'
			</script>
		<?php
		}
	}
	public function delete($id)
	{
		$sql = "delete from student where id=$id";
		$query = $this->db->query($sql);
		if ($query) {
		?>
			<script>
				alert("deleted the value successfully")
				window.location.href = '<?php echo base_url(); ?>student/index'
			</script>
<?php
		}
	}
	public function image(){
		$this->load->view("image");

	}
	public function imageUpload(){
		$file_name = $_FILES['myfile']['name'];
		//var_dump($file_name);
		if ($file_name != NULL) {
			$temp = $_FILES['myfile']['tmp_name'];
			$new_file_name = time() . $file_name;
			move_uploaded_file($temp, 'images/' . $new_file_name);
			echo "If";
			$image = 'images/' . $new_file_name;
		} else {
			echo "else";
		}

		//move_uploaded_file($temp,'uploads/'.$new_file_name);
	}
	public function sampleSession(){
		session_start();
		$_SESSION['username']=NULL;
		// $this->db->select("student_name");
		// $this->db->from("student");
		// $this->db->where("id=1");
		// $query=$sql=$this->db->get("");
		// $res=$query->result();
		
		
		// foreach($res as $name){
		// 	$user=$name->student_name;
		// }
		// $_SESSION['username']=$user;
		//unset($_SESSION['username']);
		$this->load->view("sample_session");
	}
	public function login()
	{
		$this->load->view("login");
	}
	public function user_check()
	{
		$firstName = $this->input->post("firstName");
		

		session_start();
		$this->db->select("student_name");
		$this->db->from("student");
		$this->db->where("id=1");
		$query=$sql=$this->db->get("");
		$res=$query->result();
		
		
		
		$num = $query->num_rows();
		if ($num > 0) {

			foreach($res as $name){
				$user=$name->student_name;
			}
			$_SESSION['username']=$user;
?>
			<script>
				alert("login successful");
				window.location.href = '<?php echo base_url('student/sampleSession'); ?>'
			</script>

		<?php
		} else {
		?>
			<script>
				alert("invalid user name or password");
				window.location.href = '<?php echo base_url('welcome/login'); ?>'
			</script>

		<?php
		}
	}
	public function session3(){
		session_start();
		$this->db->select("student_name");
		$this->db->from("student");
		$this->db->where("id=1");
		$query=$sql=$this->db->get("");
		$res=$query->result();

		foreach($res as $name){
			$user=$name->student_name;
		}
		$_SESSION['username']=$user;

		$this->load->view("sample_session3");
		
	}
	//..................................................
	public function login1(){
		$this->load->view("login_page");
	}
	public function loginCheck(){
		session_start();
		$this->db->select("student_name");
		$this->db->from("student");
		$this->db->where("id=1");
		$query=$sql=$this->db->get("");
		$res=$query->result();

		foreach($res as $name){
			$uname=$name->student_name;
		}
		echo $uname;
		if(isset($_SESSION['uname'])){
			echo "if";
			$this->load->view("products");
		}elseif($_POST['uname']==$uname){
			echo "elseif";
			$_SESSION['uname']=$uname;
			$this->load->view("products");
		}else{
			echo "else";
			$this->load->view("login_page");
		}

		
	}
	public function logout1(){
		session_start();
		if(isset($_SESSION['uname'])){
			session_destroy();
			$this->load->view("login_page");
		}

	}public function login2(){
		$this->load->view("login_page2");
	}
	public function loginCheck2(){
		session_start();
		$firstName=$this->input->Post("firstName");
		$password=$this->input->Post("password");

		$this->db->select("*");
		$this->db->from("user");
		$this->db->where("firstName",$firstName);
		$this->db->where("password",$password);
		$query=$this->db->get("");
		$res=$query->result();

		$db_firstName =NULL;
		$db_password=NULL;
		

		foreach($res as $detais){
			$db_firstName = $detais->firstName;
			$db_password= $detais->password;
		}

		


		if(isset($_SESSION['uname'])){
			?>
				<script>
					alert("you didn't logout")
					window.location.href="<?php echo base_url('student/productsDetails2') ?>";
				</script>
			<?php
		}elseif($db_firstName==$firstName && $db_password==$password){
			$_SESSION['uname']=$db_firstName;
			?>
				<script>
					alert("login sucess")
					window.location.href="<?php echo base_url('student/productsDetails2') ?>";
				</script>
			<?php
		}else{
			?>
				<script>
					alert("Invalid user name or pasword !")
					window.location.href="<?php echo base_url('student/login2') ?>";
				</script>
			<?php
		}

	}
	public function productsDetails2(){
		session_start();
		if($_SESSION['uname'] != NULL){
			$this->load->view("products2");
		}else{
			?>
				<script>
					alert("enter username and password")
					window.location.href="<?php echo base_url('student/login2') ?>";
				</script>
			<?php
		}
		

	}
	public function logout2(){
		session_start();
		if(isset($_SESSION['uname'])){
			session_destroy();
			?>
				<script>
					alert("Logout successfully !")
					window.location.href="<?php echo base_url('student/login2') ?>";
				</script>
			<?php
		}

	}
}
