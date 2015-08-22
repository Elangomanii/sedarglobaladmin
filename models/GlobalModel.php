<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GlobalModel extends CI_Model {
 
    function GetProjectOverview()
     {
	if($this->session->userdata('browserLanguage')=='ar')
	{  
	    $sql="SELECT * FROM ar_about_us";
	    return $query = $this->db->query($sql)->result_array();
	}
	else
	{
	    $sql="SELECT * FROM about_us";
	    return $query = $this->db->query($sql)->result_array();
	}
	
     }
     function projectOverviewDetails()
     {
	$this->db->where('id',1);
	if($this->session->userdata('browserLanguage')=='ar')
	{  
	    return $this->db->get("ar_about_us")->result_array();
	}
	else{
	    return $this->db->get("about_us")->result_array();
	}
     }
     function ProjectOverview_Add()
     {
	 $data = array(
	     "aboutTitle"=>$this->input->post("aboutTitle"),
	     "aboutSubTitle"=>$this->input->post("aboutSubTitle"),
	     "aboutDescription"=>$this->input->post("aboutDescription")
	 );
	$this->db->where('id',1);
	if($this->session->userdata('browserLanguage')=='ar')
	{
	    return $this->db->update("ar_about_us",$data);
	}
	else
	{
	    return $this->db->update("about_us",$data);
	}
	
     }
     
      function globalAuthentication()
      {
	  $user_id = $this->input->post('userId');
	  $password = md5($this->input->post('password'));
	  
	  $sql="SELECT * FROM user where username='$user_id' AND password='$password'";
	
	   
	 // return $query = $this->db->query($sql)->result_array();
	  $query = $this->db->query($sql, $return_object = TRUE);
	  
	  if($query->num_rows > 0){
	      return $query->result_array();
	  }
	  else
	  {
	      return false;
	  }
	   
      
      //print_r($query);
      //exit();
      }
       function sliderImageAdd()	
       {
	   //multiple image gallery
	   $files = $_FILES['sliderImage'];
	   $c=count($_FILES['sliderImage']['size']);
	   for($i=0; $i<$c; $i++)
	   {
	       if($files['name'][$i]!="")
	       {
		   $config['upload_path'] = 'uploads/';
		   $config['allowed_types'] = 'gif|jpg|png';
		   $_FILES['sliderImage']['name'] = $files['name'][$i];
		   $_FILES['sliderImage']['type'] = $files['type'][$i];
		   $_FILES['sliderImage']['tmp_name'] = $files['tmp_name'][$i];
		   $_FILES['sliderImage']['error'] = $files['error'][$i];
		   $_FILES['sliderImage']['size'] = $files['size'][$i];
		   $this->load->library('upload', $config);
		   $this->upload->initialize($config);
		   $this->upload->do_upload('sliderImage');
		   $data = $this->upload->data();
		   $name_array[] = $data['file_name'];
	       }
	       
	   }
	   //$names= implode(',', $name_array);
	   
	   $data= array(
	   
	       "sliderImage"=>$name_array,
	       "sliderTitle"=>$this->input->post("['projectImgTitle'][$i]"),
	       "slider"=>$this->input->post("['projectImgTitle'][$i]")
						 
	   );
	   //if($this->session->userdata('browserLanguage')=='ar')
	   //{
		//$this->db->insert("ar_about_project_img",$data);
	   //}
	   //else{
		$this->db->insert("about_project_img",$data);
	   //}
       }
      
       function sedarUserAdd()
       {
	   $data = array(
		       "username"=>$this->input->post("sedarName"),
		       "password"=>md5($this->input->post("sedarPassword")),
		       "email"=>$this->input->post("sedarEmail")
		       );
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->insert("ar_user",$data);
	    }
	    else
	    {
		$this->db->insert("user",$data);
	    }
       }
       
    
	//sedar user View Start
       function sedarUserView()
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		return $this->db->get("ar_user")->result_array();
	    }
	    else
	    {
		return $this->db->get("user")->result_array();
	    }
	}
       function sedarUserEdit($id)
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id","$id");
		return  $this->db->get("ar_user")->result_array();
	    }
	    else{
		$this->db->where("id","$id");
		return  $this->db->get("user")->result_array();		
	    }
	}
       function sedarUserUpdate($id)
	{
	    $data = array(
			"username"=>$this->input->post("sedarName"),
			"email"=>$this->input->post("sedarEmail")			    
			);
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id","$id");
		$this->db->update("ar_user",$data);
	    }
	    else{
		$this->db->where("id","$id");
		$this->db->update("user",$data);
	    }
	}
       function sedarUserDelete($id)
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id",$id);
		$this->db->delete("ar_user");
	    }
	    else
	    {
		$this->db->where("id",$id);
		$this->db->delete("user");
	    }
	}
	//sedar user View End
	
//CONTACT PAGE START

     function contactDetails()
     {
	$this->db->where('id',1);
	if($this->session->userdata('browserLanguage')=='ar')
	{
	   
	   return $this->db->get("ar_contact")->result_array();
	}
	else{
	    return $this->db->get("contact")->result_array();
	}
     }
     function contact()
     {
	 $data = array(
	     
	     "contactTitle"=>$this->input->post("contactTitle"),
	     "contactSubTitle"=>$this->input->post("contactSubTitle"),
	     "description"=>$this->input->post("description"),
	     
	     "footertitle"=>$this->input->post("footertitle"),
	     "footersubtitle"=>$this->input->post("footersubtitle"),
	     "footerusername"=>$this->input->post("footerusername"),
	     "footerpassword"=>$this->input->post("footerpassword"),
	     "footerphone"=>$this->input->post("footerphone"),
	     "footereason"=>$this->input->post("footereason"),
	     "footerfeedback"=>$this->input->post("footerfeedback")
	 );
	 $this->db->where('id',1);
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
	        return $this->db->update("ar_contact",$data);	   
	    }
	    else{
	       return $this->db->update("contact",$data);
	    }
     }

//CONTACT PAGE END
	
	///////////////////////////////////SELVA MODEL START*********************************************************************
	
       function GetFaqTable()
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$sql="SELECT * FROM ar_faq";
		return $query = $this->db->query($sql)->result_array();
	    }
	    else
	    {
		$sql="SELECT * FROM faq";
		return $query = $this->db->query($sql)->result_array();	
	    }
	}
       function FaqTableRow($id)
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id","$id");
		return $this->db->get("ar_faq")->result_array();
	    }
	    else
	    {
		$this->db->where("id","$id");
		return $this->db->get("faq")->result_array();
	    }
	}
    //Add Function Start
       function FaqInsert()
	{
	    $data= array(
			 "Faq_title"=>$this->input->post("Faq_Title"),
			 "Faq_description"=>$this->input->post("Faq_Description")
			 );
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->insert("ar_faq",$data);
		return $this->db->get('ar_faq')->result_array();
	    }
	    else
	    {
		$this->db->insert("faq",$data);
		return $this->db->get('faq')->result_array();
	    }
	}
       function Faq_Edit($id)
	{
	    $this->db->where("id",$id);
	    $data= array(
			 "Faq_title"=>$this->input->post("Faq_Title"),
			 "Faq_description"=>$this->input->post("Faq_Description")
			 );
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->update("ar_faq",$data);
	    }
	    else
	    {
		$this->db->update("faq",$data);
	    }
	}
	
       function Faq_Delete($id)
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id",$id);
		$this->db->delete("ar_faq");
	    }
	    else
	    {
		$this->db->where("id",$id);
		$this->db->delete("faq");
	    }
	}
	
    //***********************************************************************Faq End*****************************************************************************//
    
    
    //*******************************************************************Privacy Policy Start*******************************************************************//
	
       function GetPrivacyPolicyTable()
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$sql="SELECT * FROM ar_privacy_policy";
		return $query = $this->db->query($sql)->result_array();
	    }
	    else
	    {
		$sql="SELECT * FROM privacy_policy";
		return $query = $this->db->query($sql)->result_array();
	    }
	}
	
       function PrivacyPolicyTableRow($id)
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id","$id");
		return $this->db->get("ar_privacy_policy")->result_array();
	    }
	    else
	    {
		$this->db->where("id","$id");
		return $this->db->get("privacy_policy")->result_array();
	    }
	}
    //Add Function Start
      function PrivacyPolicyInsert()
	{
	    $data= array(
			 "privacy_policy_title"=>$this->input->post("PrivacyPolicy_Title"),
			 "privacy_policy_description"=>$this->input->post("PrivacyPolicy_Description")
			 );
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->insert("ar_privacy_policy",$data);
		return $this->db->get('ar_privacy_policy')->result_array();
	    }
	    else
	    {
		$this->db->insert("privacy_policy",$data);
		return $this->db->get('privacy_policy')->result_array();
	    }
	}
       function PrivacyPolicy_Edit($id)
	{
	    $this->db->where("id",$id);
	    $data= array(
			 "privacy_policy_title"=>$this->input->post("PrivacyPolicy_Title"),
			 "privacy_policy_description"=>$this->input->post("PrivacyPolicy_Description")
			 );
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->update("ar_privacy_policy",$data);
	    }
	    else
	    {
		$this->db->update("privacy_policy",$data);
	    }
	}
       function PrivacyPolicy_Delete($id)
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id",$id);
		$this->db->delete("ar_privacy_policy");
	    }
	    else
	    {
		$this->db->where("id",$id);
		$this->db->delete("privacy_policy");
	    }
	}
	
    //*******************************************************************Privacy Policy End*******************************************************************//
    
    
    //***************************************************************Terms And Conditions Starts***********************************************************************//
	
       function GetTermsAndConditionTable()
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$sql="SELECT * FROM ar_terms";
		return $query = $this->db->query($sql)->result_array();
	    }
	    else
	    {
		$sql="SELECT * FROM terms";
		return $query = $this->db->query($sql)->result_array();
	    }
	}
	
       function TermsAndConditionTableRow($id)
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id","$id");
		return $this->db->get("ar_terms")->result_array();
	    }
	    else
	    {
		$this->db->where("id","$id");
		return $this->db->get("terms")->result_array();
	    }
	}
    //Add Function Start
       function Terms_Add()
	{
	    $data= array(
			 "title"=>$this->input->post("title"),
			 "linkTitle"=>$this->input->post("linkTitle"),
			 "description"=>$this->input->post("description")
			 );
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->insert("ar_terms",$data);
		return $this->db->get('ar_terms')->result_array();
	    }
	    else
	    {
		$this->db->insert("terms",$data);
		return $this->db->get('terms')->result_array();
	    }
	}
	
       function Terms_Edit($id)
	{
	    $this->db->where("id",$id);
	    $data= array(
			 "title"=>$this->input->post("title"),
			 "linkTitle"=>$this->input->post("linkTitle"),
			 "description"=>$this->input->post("description")
			 );
    	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		 $this->db->update("ar_terms",$data);
	    }
	    else
	    {
		 $this->db->update("terms",$data);
	    }
	}
	
       function Terms_Delete($id)
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id",$id);
		$this->db->delete("ar_terms");	
	    }
	    else
	    {
		$this->db->where("id",$id);
		$this->db->delete("terms");	
	    }
	}
	
    //***************************************************************Terms And Conditions End***********************************************************************//
    
    //*************************************************************FeedBack Form Start********************************************************//
    
       function GetFeedback()
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$sql="SELECT * FROM ar_feedback";
		return $query = $this->db->query($sql)->result_array();
	    }
	    else
	    {
		$sql="SELECT * FROM feedback";
		return $query = $this->db->query($sql)->result_array();
	    }
	}
       function FeedBack_insert()
	{
	    $data = array(
	    "feedback_title"=>$this->input->post("FeedbackTitle"),
	    "feedback_subtitle"=>$this->input->post("FeedbackSubTitle"),
	    "feedback_description"=>$this->input->post("FeedbackDescription")
	    );
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->insert("ar_feedback",$data);
		return $this->db->get("ar_feedback")->result_array();
	    }
	    else
	    {
		$this->db->insert("feedback",$data);
		return $this->db->get("feedback")->result_array();
	    }
	}
       function FeedBackRow($id)
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id","$id");
		return $this->db->get("ar_feedback")->result_array();
	    }
	    else
	    {
		$this->db->where("id","$id");
		return $this->db->get("feedback")->result_array();
	    }
	}
       function Feedback_Edit($id)
	{
	    $data = array(
	    "feedback_title"=>$this->input->post("FeedbackTitle"),
	    "feedback_subtitle"=>$this->input->post("FeedbackSubTitle"),
	    "feedback_description"=>$this->input->post("FeedbackDescription")
	    );
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id",$id);
		$this->db->update("ar_feedback",$data);
	    }
	    else
	    {
		$this->db->where("id",$id);
		$this->db->update("feedback",$data);
	    }
	}
       function FeedBackDelete($id)
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id",$id);
		$this->db->delete("ar_feedback");
	    }
	    else
	    {
		$this->db->where("id",$id);
		$this->db->delete("feedback");
	    }
	}
    
    //*************************************************************FeedBack Form End********************************************************//
    
    //*************************************************************Sedar Material End********************************************************//
       function Material_insert()
	{
	    $data = array(
	    "materialName"=>$this->input->post("materialName"),
	    );
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->insert("ar_sedarmaterial",$data);
		return $this->db->get("ar_sedarmaterial")->result_array();
	    }
	    else
	    {
		$this->db->insert("sedarmaterial",$data);
		return $this->db->get("sedarmaterial")->result_array();
	    }
	}
	
       function Getmaterial()
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$sql="SELECT * FROM ar_sedarmaterial";
		return $query = $this->db->query($sql)->result_array();
	    }
	    else
	    {
		$sql="SELECT * FROM sedarmaterial";
		return $query = $this->db->query($sql)->result_array();
	    }
	}
	
       function Sedarmaterial_Edit($id)
	{
	    $data = array("materialName"=>$this->input->post("materialName"),);
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id",$id);
		$this->db->update("ar_sedarmaterial",$data);
	    }
	    else
	    {
		$this->db->where("id",$id);
		$this->db->update("sedarmaterial",$data);
	    }
	}
	
       function MaterialRow($id)
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id","$id");
		return $this->db->get("ar_sedarmaterial")->result_array();
	    }
	    else
	    {
		$this->db->where("id","$id");
		return $this->db->get("sedarmaterial")->result_array();
	    }
	}
	
       function Sedarmaterial_Delete($id)
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id",$id);
		$this->db->delete("ar_sedarmaterial");
	    }
	    else
	    {
		$this->db->where("id",$id);
		$this->db->delete("sedarmaterial");
	    }
	}
    
    //*************************************************************Sedar Material End********************************************************//
    
    //*************************************************************Sedar Accessories End********************************************************//
       function Accessories_insert()
	{
	    $data = array(
	    "AccessoriesName"=>$this->input->post("AccessoriesName"),
	    );
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->insert("ar_sedaraccessories",$data);
		return $this->db->get("ar_sedaraccessories")->result_array();
	    }
	    else
	    {
		$this->db->insert("sedaraccessories",$data);
		return $this->db->get("sedaraccessories")->result_array();
	    }    
	}
	
       function Getaccessories()
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$sql="SELECT * FROM ar_sedaraccessories";
		return $query = $this->db->query($sql)->result_array();
	    }
	    else
	    {
		$sql="SELECT * FROM sedaraccessories";
		return $query = $this->db->query($sql)->result_array();
	    }
	}
	
       function  AccessoriesRow($id)
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id","$id");
		return $this->db->get("ar_sedaraccessories")->result_array();
	    }
	    else
	    {
		$this->db->where("id","$id");
		return $this->db->get("sedaraccessories")->result_array();
	    }
	}
	
       function Sedaraccessories_Edit($id)
	{
	    $data = array(
	    "AccessoriesName"=>$this->input->post("AccessoriesName"),
	    );
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id",$id);
		$this->db->update("ar_sedaraccessories",$data);
	    }
	    else
	    {
		$this->db->where("id",$id);
		$this->db->update("sedaraccessories",$data);
	    }
	}
       function Sedaraccessories_Delete($id)
	{
    	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id",$id);
		$this->db->delete("ar_sedaraccessories"); 
	    }
	    else
	    {
		$this->db->where("id",$id);
		$this->db->delete("sedaraccessories"); 
	    }
	}
	
	///////////////////////////////////SELVA MODEL END***********************************************************************
	
	///////////////////////////////////HAKKIM MODEL START*********************************************************************
	
//       function getcountry()
//	
//	{
//	    $sql="SELECT * FROM ourcountry";
//	    return $query = $this->db->query($sql)->result_array();
//
//	}
//       function pushcountry()
//	{
//	    
//	    $data = array(
//	    "countryName"=>$this->input->post("countryName"),
//	    "CountryCode"=>$this->input->post("CountryCode"),
//	    "latitude"=>$this->input->post("latitude"),
//	    "longitude"=>$this->input->post("longitude"),
//	    );
//	    $this->db->insert("ourcountry",$data);
//	}
//       function countryget($id)
//	{
//	    
//	$this->db->where("id","$id");
//	return $this->db->get("ourcountry")->result_array(); 
//	    
//	}
//       function updatecountry($id)
//	{
//	    $data = array(
//	    "countryName"=>$this->input->post("countryName"),
//	    "CountryCode"=>$this->input->post("CountryCode"),
//	    "latitude"=>$this->input->post("latitude"),
//	    "longitude"=>$this->input->post("longitude"),
//	    );
//	    $this->db->where("id",$id);
//	    $this->db->update("ourcountry",$data);
//	    
//	}
//	
//       function getState()
//	
//	{
//	    $sql="SELECT * FROM outstate";
//	    return $query = $this->db->query($sql)->result_array();
//	    
//	}
//	
//       function pushstate()
//	{
//	    
//	    $data = array(
//	    "stateName"=>$this->input->post("stateName"),
//	    "stateCode"=>$this->input->post("stateCode"),
//	    "countryCode"=>$this->input->post("countryCode"),
//	    "latitude"=>$this->input->post("latitude"),
//	    "longitude"=>$this->input->post("longitude"),
//	    );
//	    $this->db->insert("outstate",$data);
//	}
//	
//       function stateget($id)
//	{
//	    
//	$this->db->where("id","$id");
//	return $this->db->get("outstate")->result_array(); 
//	    
//	}
//	
//       function updatestate($id)
//	{
//	    $data = array(
//	    "stateName"=>$this->input->post("stateName"),
//	    "stateCode"=>$this->input->post("stateCode"),
//	    "countryCode"=>$this->input->post("countryCode"),
//	    "latitude"=>$this->input->post("latitude"),
//	    "longitude"=>$this->input->post("longitude"),
//	    );
//	    //print_r($data);
//	    //exit;
//	    $this->db->where("id",$id);
//	    $this->db->update("outstate",$data);
//	    
//	}
//	
//	
//       function getStores($id)
//	{
//	    
//	    $sql="select * from store_image where id='$id'";
//	    return $result=$this->db->query($sql)->result_array();
//	       
//	}
//	
//       function getStores1()
//	{
//	    
//	    $sql="select * from store_image";
//	    return $result=$this->db->query($sql)->result_array();
//	       
//	}
//	
//	
//       function putStores($id)
//	{
//	   $files = $_FILES['image'];
//	    
//	    $c=count($_FILES['image']['size']);
//	    for($i=0; $i<$c; $i++)
//	    {
//	    if($files['name'][$i]!=""){
//	    $config['upload_path'] = 'uploads/';
//	    $config['allowed_types'] = 'gif|jpg|png';
//	    $_FILES['image']['name'] = $files['name'][$i];
//	    $_FILES['image']['type'] = $files['type'][$i];
//	    $_FILES['image']['tmp_name'] = $files['tmp_name'][$i];
//	    $_FILES['image']['error'] = $files['error'][$i];
//	    $_FILES['image']['size'] = $files['size'][$i];
//	    $this->load->library('upload', $config);
//	    $this->upload->initialize($config);
//	    $this->upload->do_upload('image');
//	    $data = $this->upload->data();
//	    $name_array[] = $data['file_name'];
//	    }
//	    else {
//
//		$name_array[] = $_POST['oldimage'][$i];
//		}
//	    
//	    }
//	    
//	    $names= implode(',', $name_array);
//	    $data= array(
//	       
//	"image"=>$names,
//	"title"=>$this->input->post("title"),
//	"latitude"=>$this->input->post("latitude"),
//	"longitude"=>$this->input->post("longitude"),
//	"addresstitle"=>$this->input->post("address1"),
//	"address1"=>$this->input->post("address2"),
//	"address2"=>$this->input->post("address3"),
//	"fax"=>$this->input->post("fax"),
//	"phone"=>$this->input->post("phone"),
//	"description"=>$this->input->post("description"),
//	"imagedescription"=>$this->input->post("imagedescription")
//	   );
//	//print_r($data);
//	//exit;
//	$result1=$this->db->where('id',$id);
//          $result= $this->db->update('store_image',$data);
//	}
//       function storesImage()
//	{
//		    
//	  //multiple image gallery
//	    $files = $_FILES['image'];
//
//	    $c=count($_FILES['image']['size']);
//	    for($i=0; $i<$c; $i++)
//	    {
//	    if($files['name'][$i]!=""){
//	    $config['upload_path'] = 'uploads/';
//	    $config['allowed_types'] = 'gif|jpg|png';
//	    $_FILES['image']['name'] = $files['name'][$i];
//	    $_FILES['image']['type'] = $files['type'][$i];
//	    $_FILES['image']['tmp_name'] = $files['tmp_name'][$i];
//	    $_FILES['image']['error'] = $files['error'][$i];
//	    $_FILES['image']['size'] = $files['size'][$i];
//	    $this->load->library('upload', $config);
//	    $this->upload->initialize($config);
//	    $this->upload->do_upload('image');
//	    $data = $this->upload->data();
//	    $name_array[] = $data['file_name'];
//	    }
//	   
//	    }
//	    $names= implode(",", $name_array);
//	    $data= array(
//	       
//	   "image"=>$names,
//	   "title"=>$this->input->post("title"),
//	   "latitude"=>$this->input->post("latitude"),
//	    "longitude"=>$this->input->post("longitude"),
//	    "addresstitle"=>$this->input->post("address1"),
//	    "address1"=>$this->input->post("address2"),
//	    "address2"=>$this->input->post("address3"),
//	    "fax"=>$this->input->post("fax"),
//	    "phone"=>$this->input->post("phone"),
//	    "description"=>$this->input->post("description"),
//	     "city"=>$this->input->post("country"),
//	      "state"=>$this->input->post("state"),
//	    "imagedescription"=>$this->input->post("imgdesciption")
//	   );
//	    //print"<pre>";
//	    //print_r($data);
//	    //print"<pre>";
//	    //exit;
//	    
//	    $this->db->insert("store_image",$data);
//	    
//	    
//	}
	
	
	function FormDetails()
	{
	    $sql="select * from oppertunityform where id=1";
	    return $result=$this->db->query($sql)->result_array();   
	    
	    
	}
	
	function FranchiseFormDetails()
	{
	    
	     $data = array(
		 "formtitle"=>$this->input->post("formtitle"),
		 "formname"=>$this->input->post("formname"),
		 "formmobile"=>$this->input->post("formmobile"),
		  "formemail"=>$this->input->post("formemail"),
		   "formabout"=>$this->input->post("formabout")
		 );

	$this->db->where('id',1);
	return $this->db->update("oppertunityform",$data);        
	    
	}
	
       function getslider()
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {     
		$sql="select * from ar_slider";
		return $result=$this->db->query($sql)->result_array();   
	    }
	    else{
		$sql="select * from slider";
		return $result=$this->db->query($sql)->result_array();  
	    }
	    
	}
       function sliderImage()
	{
	    
	 $files = $_FILES['image'];
	 $c=count($_FILES['image']['size']);
	 for($i=0; $i<$c; $i++)
	 {
	  if($files['name'][$i]!="")
	  {
	  $config['upload_path'] = 'uploads/';
	  $config['allowed_types'] = 'gif|jpg|png';
	  $_FILES['image']['name'] = $files['name'][$i];
	  $_FILES['image']['type'] = $files['type'][$i];
	  $_FILES['image']['tmp_name'] = $files['tmp_name'][$i];
	  $_FILES['image']['error'] = $files['error'][$i];
	  $_FILES['image']['size'] = $files['size'][$i];
	  $this->load->library('upload', $config);
	  $this->upload->initialize($config);
	  $this->upload->do_upload('image');
	  $data = $this->upload->data();
	  $name_array[] = $data['file_name'];
	  }
	 }
	  $names= implode(',', $name_array);
	 $count=count($this->input->post('sliderTitle'));
	    //$sliertitle=;
	    //$subTitle=;
	    //$sliderLink=;
	    
	    for($i=0;$i<$count;$i++)
	    {
		$slider[]=$_POST['sliderTitle'][$i];
		$title[]=$_POST['subTitle'][$i];
		$link[]=$_POST['sliderLink'][$i];
	    }
	
	    $slider=implode(',', $slider);
	    $title=implode(',', $title);
	    $link=implode(',', $link);
	
	
	    $data=array(
		
		"SliderImage"=>$names,
		"SliderTitle"=>$slider,
		"SliderDescription"=>$title,
		"SliderLink"=>$link,
		
		
	    );
	    if($this->session->userdata('browserLanguage')=='ar')
	    {   
		$this->db->insert("ar_slider",$data);
	    }
	    else{
		$this->db->insert("slider",$data);
	    }
	    
	}
	
	function getSlideredit($id)
	{
	   if($this->session->userdata('browserLanguage')=='ar')
	    {     
		$sql="select * from ar_slider where id='$id'";
		return $result=$this->db->query($sql)->result_array();     
	    }
	    else{
		$sql="select * from slider where id='$id'";
		return $result=$this->db->query($sql)->result_array();     
	    }
	}
	
	function putslideupdate($id)
	
	{
	    
	$files = $_FILES['image'];
	$c=count($_FILES['image']['size']);
	//print_r($c);
	     for($i=0; $i<$c; $i++)
	    {
		if($files['name'][$i]!="")
		{
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$_FILES['image']['name'] = $files['name'];
		$_FILES['image']['type'] = $files['type'];
		$_FILES['image']['tmp_name'] = $files['tmp_name'];
		$_FILES['image']['error'] = $files['error'];
		$_FILES['image']['size'] = $files['size'];
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('image');
		$data = $this->upload->data();
		$name_array[] = $data['file_name'];
		}
		 else
		{
		 $name_array[] = $_POST['oldimage'][$i];
		}
		
	    }
	  

	     $names= implode(',', $name_array);
	   // 	   print_r($names);
	   //exit;
	   // 
	    $count=count($this->input->post('sliderTitle'));
	    //$sliertitle=;
	    //$subTitle=;
	    //$sliderLink=;

	    for($i=0;$i<$count;$i++)
	    {
		$slider[]=$_POST['sliderTitle'][$i];
		$title[]=$_POST['subTitle'][$i];
		$link[]=$_POST['sliderLink'][$i];
		
	    }
	    
	      $slider1=implode(',', $slider);
	     $title1=implode(',', $title);
	     $link1=implode(',', $link);
       
	    $data=array(
		
		"SliderImage"=>$names,
		"SliderTitle"=>$slider1,
		"SliderDescription"=>$title1,
		"SliderLink"=>$link1,
	    );
	    
	    //print_r($data);
	    //exit;
	    //
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$result1=$this->db->where('id',$id);
		$result= $this->db->update('ar_slider',$data);
	    }
	    else{
		$result1=$this->db->where('id',$id);
		$result= $this->db->update('slider',$data);
	    }
	    
	}
	
	function sliderDelete($id)
	{
	    //print_r($id);
	    //exit;
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where('id', $id);
		$this->db->delete('ar_slider');
	    }
	    else{
		$this->db->where('id', $id);
		$this->db->delete('slider');
	    }
	    
	}
	function getProduct()
	{
	    
	$sql="select * from product_slider";
	return $result=$this->db->query($sql)->result_array();   
	    
	    
	}
	function productSliderGet()
	{
	    
	 $files = $_FILES['image'];
	$c=count($_FILES['image']['size']);
	    for($i=0; $i<$c; $i++)
	    {
	    if($files['name'][$i]!=""){
	    $config['upload_path'] = 'uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $_FILES['image']['name'] = $files['name'][$i];
	    $_FILES['image']['type'] = $files['type'][$i];
	    $_FILES['image']['tmp_name'] = $files['tmp_name'][$i];
	    $_FILES['image']['error'] = $files['error'][$i];
	    $_FILES['image']['size'] = $files['size'][$i];
	    $this->load->library('upload', $config);
	    $this->upload->initialize($config);
	    $this->upload->do_upload('image');
	    $data = $this->upload->data();
	    $name_array[] = $data['file_name'];
	    }
	   
	    }
	    echo $names= implode(',', $name_array);
	    
	    $count=count($this->input->post('sliderTitle'));
	    //$sliertitle=;
	    //$subTitle=;
	    //$sliderLink=;

	    for($i=0;$i<$count;$i++)
	    {
		$slider[]=$_POST['sliderTitle'][$i];
		$title[]=$_POST['subTitle'][$i];
		$link[]=$_POST['sliderLink'][$i];
		
	    }
	
	    echo $slider=implode(',', $slider);
	    echo $title=implode(',', $title);
	    echo $link=implode(',', $link);
	    
	
	    $data=array(
		
		"productSliderImage"=>$names,
		"productSliderTitle"=>$slider,
		"productSliderDescription"=>$title,
		"productSliderLink"=>$link,
		
		
	    );

	     $this->db->insert("product_slider",$data);
	    
	}
	
	function getProductNow($id)
	{
	    
	  $sql="select * from product_slider where id='$id'";
	return $result=$this->db->query($sql)->result_array();     
	    
	}
	
	function putProductupdate($id)
	
	{
	    //exit();
	    $files = $_FILES['image'];
	    $c=count($_FILES['image']['size']);
	    for($i=0; $i<$c; $i++)
	    {
	    if($files['name'][$i]!=""){
	    $config['upload_path'] = 'uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $_FILES['image']['name'] = $files['name'][$i];
	    $_FILES['image']['type'] = $files['type'][$i];
	    $_FILES['image']['tmp_name'] = $files['tmp_name'][$i];
	    $_FILES['image']['error'] = $files['error'][$i];
	    $_FILES['image']['size'] = $files['size'][$i];
	    $this->load->library('upload', $config);
	    $this->upload->initialize($config);
	    $this->upload->do_upload('image');
	    $data = $this->upload->data();
	    $name_array[] = $data['file_name'];
	    }
	   else {

	    $name_array[] = $_POST['oldimage'][$i];
	    }
	    }
	    echo $names= implode(',', $name_array);
	    
	    $count=count($this->input->post('sliderTitle'));
	    //$sliertitle=;
	    //$subTitle=;
	    //$sliderLink=;

	    for($i=0;$i<$count;$i++)
	    {
		$slider[]=$_POST['sliderTitle'][$i];
		$title[]=$_POST['subTitle'][$i];
		$link[]=$_POST['sliderLink'][$i];
		
	    }
	
	 $slider=implode(',', $slider);
	 $title=implode(',', $title);
	 $link=implode(',', $link);
	
	
	    $data=array(
		
		"productSliderImage"=>$names,
		"productSliderTitle"=>$slider,
		"productSliderDescription"=>$title,
		"productSliderLink"=>$link,
		
		
	    );

	    $result1=$this->db->where('id',$id);
	    $result= $this->db->update('product_slider',$data);
//	   print_r($result);
//exit; 
	    
	}
	
	function globalStoreDel($id)
	{
	    //print_r($id);
	    //exit;
	    
	    $this->db->where('id', $id);
	    $this->db->delete('store_image');

	}
	
	
	function productDelete($id)
	{
	    //print_r($id);
	    //exit;
	    
	    $this->db->where('id', $id);
	    $this->db->delete('product_slider');

	}
	
	function getMenu()
	
	{
	
	    $data=array(
		
		"menu"=>$_POST['title'],
		"menuType"=>$_POST['type'],
		"menuLink"=>$_POST['url'],

	    );
	    $this->db->insert("menu",$data);
	    
	    $insert_id = $this->db->insert_id();
	     $datasubmenu=array(
		"menuid"=>$insert_id,
		"submenu1"=>$_POST['submenu'],
		"submenulink1"=>$_POST['submenulink1'],
		"submenu2"=>$_POST['submenu1'],
		"submenulink2"=>$_POST['submenulink2'],
		"subdescription"=>$_POST['subcontent'],
		"submenu3"=>$_POST['submenu4'],
		"submenu4"=>$_POST['submenu3'],
		"download"=>$_POST['download'],
		"tryit"=>$_POST['try'],

	    );
	     	    
//print_r($datasubmenu);
//exit;
	     
         $this->db->insert("submenuclient",$datasubmenu);
	 
	//     
	//     	     $dataproductmenu=array(
	//	"menuid"=>$insert_id,
	//	"submenu1"=>$_POST['submenu'],
	//	//"submenulink1"=>$_POST['submenulink1'],
	//	"submenu2"=>$_POST['submenu1'],
	//	//"submenulink2"=>$_POST['submenulink2'],
	//	"subdescription"=>$_POST['subcontent'],
	//	"submenu3"=>$_POST['submenu3'],
	//	"submenu4"=>$_POST['submenulink4'],
	//
	//
	//    );
	    
//print_r($data);
//exit;
	    //$this->db->insert("submenuproduct",$dataproductmenu);
	    
	     
	    
	}
	
	function pullMenu()
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {  
		$sql="select * from ar_menu";
		return $result=$this->db->query($sql)->result_array();
	    }
	    else{
		$sql="select * from menu";
		return $result=$this->db->query($sql)->result_array();
	    }
	}
	
	function getmenuNow($id)
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {  
		$sql="select * from ar_menu where id='$id'";
		return $result=$this->db->query($sql)->result_array();
	    }
	    else{
		$sql="select * from menu where id='$id'";
		return $result=$this->db->query($sql)->result_array();
	    }
	}
	
	function getSubmenuNow($id)
	{

		 $sql="select * from submenuclient where menuid='$id'";
		 return $result=$this->db->query($sql)->result_array();

	}
	
	function putmenuupdate($id)
	
	{
	
	    $data=array(
		
		"menu"=>$_POST['title'],
		"menuType"=>$_POST['type'],
		"menuLink"=>$_POST['url'],
		
	    );
	     //print_r($data);
	     //exit;
	$this->db->where("id",$id);
	$this->db->update("menu",$data);
	
	 $datasubmenu=array(
		//"menuid"=>$insert_id,
		"submenu1"=>$_POST['submenu'],
		"submenulink1"=>$_POST['submenulink1'],
		"submenu2"=>$_POST['submenu1'],
		"submenulink2"=>$_POST['submenulink2'],
		"subdescription"=>$_POST['subcontent'],
		"submenu3"=>$_POST['submenu4'],
		"submenu4"=>$_POST['submenu3'],
		"download"=>$_POST['download'],
		"tryit"=>$_POST['try'],


	    );
	 
	 //print_r($datasubmenu);
	 //exit;
	 $this->db->where("menuid",$id);
	$this->db->update("submenuclient",$datasubmenu);
	
	    
	}
	
	function menuDelete($id)
	{
	    //print_r($id);
	    //exit;
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where('id', $id);
		$this->db->delete('ar_menu');
	    }
	    else{
		$this->db->where('id', $id);
		$this->db->delete('menu');
	    }
	}
	
	
	function getcountry()
	
	{
	    $sql="SELECT * FROM ourcountry";
	    return $query = $this->db->query($sql)->result_array();
	
	}
       function pushcountry()
	{
	    
	    $data = array(
	    "countryName"=>$this->input->post("countryName"),
	    "CountryCode"=>$this->input->post("CountryCode"),
	    "latitude"=>$this->input->post("latitude"),
	    "longitude"=>$this->input->post("longitude"),
	    );

	    $this->db->insert("ourcountry",$data);
	    
	}
       function countryget($id)
	{
	    
	$this->db->where("id","$id");
	return $this->db->get("ourcountry")->result_array(); 
	    
	}
       function updatecountry($id)
	{
	    $data = array(
	    "countryName"=>$this->input->post("countryName"),
	    "CountryCode"=>$this->input->post("CountryCode"),
	    "latitude"=>$this->input->post("latitude"),
	    "longitude"=>$this->input->post("longitude"),
	    );
	    //
	    //print_r($data);
	    //exit;
	    //
	    $this->db->where("id",$id);
	    $this->db->update("ourcountry",$data);
	    
	}
	
       function getstate()
	
	{
	    $sql="SELECT * FROM ourstate";
	    return $query = $this->db->query($sql)->result_array();
	    
	}
	
	
       function getcity()
	
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
	        $sql="SELECT * FROM ar_ourcity";
	        return $query = $this->db->query($sql)->result_array();
	    }
	    else
	    {
		$sql="SELECT * FROM ourcity";
	        return $query = $this->db->query($sql)->result_array();
	    }
	    
	}
	
	
	 function gettState()
	
	{
	    $sql="SELECT * FROM ourstate";
	    return $query = $this->db->query($sql)->result_array();
	    
	}
	
	
       function pushstate()
	{
	    
	    $data = array(
	    "stateName"=>$this->input->post("stateName"),
	    "stateCode"=>$this->input->post("stateCode"),
	    "countryCode"=>$this->input->post("countryCode"),
	
	    );

	    $this->db->insert("ourstate",$data);
	}
	
       function stateget($id)
	{
	    
	$this->db->where("id","$id");
	return $this->db->get("ourstate")->result_array(); 
	    
	}
	
       function updatestate($id)
	{
	    $data = array(
	    "stateName"=>$this->input->post("stateName"),
	    "stateCode"=>$this->input->post("stateCode"),
	    "countryCode"=>$this->input->post("countryCode"),
	    //"latitude"=>$this->input->post("latitude"),
	    //"longitude"=>$this->input->post("longitude"),
	    );
	    $this->db->where("id",$id);
	    $this->db->update("ourstate",$data);
	    
	}
	
	function getCityy()
	{
	$sql="select * from ourcity";
	 return $result=$this->db->query($sql)->result_array();
	    
	}
	
	function cityget($id)
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {   
		$this->db->where("id","$id");
		return $this->db->get("ar_ourcity")->result_array();
	    }
	    else
	    {
		$this->db->where("id","$id");
		return $this->db->get("ourcity")->result_array();
	    }  
	}
	function updatecity($id)
	{
	    $data = array(
	    "CityName"=>$this->input->post("CityName"),
	    "CityCode"=>$this->input->post("CityCode"),
	    "StateCode"=>$this->input->post("StateCode"),
	    "CountryCode"=>$this->input->post("CountryCode"),
	    //"longitude"=>$this->input->post("longitude"),
	    );
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id",$id);
		$this->db->update("ar_ourcity",$data);
	    }
	    else
	    {
		$this->db->where("id",$id);
		$this->db->update("ourcity",$data);
	    }
	}
	function pushcity()
	{
	     $data = array(
	    "CityName"=>$this->input->post("CityName"),
	    "CityCode"=>$this->input->post("CityCode"),
	    "StateCode"=>$this->input->post("StateCode"),
	    "CountryCode"=>$this->input->post("countryCode")
	    //"latitude"=>$this->input->post("latitude"),
	    //"longitude"=>$this->input->post("longitude"),
	    );

	    //print_r($data);
	    //exit;
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->insert("ar_ourcity",$data);
	    }
	    else
	    {
		$this->db->insert("ourcity",$data);
	    }
	    
	}
	
      function getStores($id)
	{
	    
	    $sql="select * from store_image where id='$id'";
	    return $result=$this->db->query($sql)->result_array();
	       
	}
	
       function getStores1()
	{
	    
	    $sql="select * from store_image";
	    return $result=$this->db->query($sql)->result_array();
	       
	}
	
	
       function putStores($id)
	{
	    
	   //$var = $_POST['oldimagee'];
	   //print_r($var);
	   //exit;
	    
	   $files = $_FILES['image'];
	    
	    $c=count($_FILES['image']['size']);
	    
	    //print_r($c);
	    for($i=0; $i<$c; $i++)
	    {
	    if($files['name'][$i]!=""){
	    $config['upload_path'] = 'uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $_FILES['image']['name'] = $files['name'][$i];
	    $_FILES['image']['type'] = $files['type'][$i];
	    $_FILES['image']['tmp_name'] = $files['tmp_name'][$i];
	    $_FILES['image']['error'] = $files['error'][$i];
	    $_FILES['image']['size'] = $files['size'][$i];
	    $this->load->library('upload', $config);
	    $this->upload->initialize($config);
	    $this->upload->do_upload('image');
	    $data = $this->upload->data();
	    $name_array[] = $data['file_name'];
	    }
	    else {

		$name_array[] = $_POST['oldimage'][$i];
		}
	    
	    }
	    

	    $filedata = $_FILES;

	    if($filedata['imagetext']['name']!="")
	    {
		
	    $config['upload_path'] = 'uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $_FILES['image']['name'] = $filedata['imagetext']['name'];
	    $_FILES['image']['type'] = $filedata['imagetext']['type'];
	    $_FILES['image']['tmp_name'] = $filedata['imagetext']['tmp_name'];
	    $_FILES['image']['error'] = $filedata['imagetext']['error'];
	    $_FILES['image']['size'] = $filedata['imagetext']['size'];
	   $this->load->library('upload', $config);
	   $this->upload->initialize($config);
	    $this->upload->do_upload('image');
	    $data= $this->upload->data();
	    $imageName = $data['file_name'];
	    }
	   else
	   {
		$imageName = $_POST['oldimagee'];
	    }
	    
	    
	$names= implode(',', $name_array);

	
	$data= array(
	"textImage"=>$imageName,
	"image"=>$names,
	"title"=>$this->input->post("title"),
	"addresstitle"=>$this->input->post("address1"),
	"address1"=>$this->input->post("address2"),
	"address2"=>$this->input->post("address3"),
	"fax"=>$this->input->post("fax"),
	"phone"=>$this->input->post("phone"),
	"country"=>$this->input->post("country"),
	"state"=>$this->input->post("state"),
	"imagedescription"=>$this->input->post("imagedescription")
	   );

	$result1=$this->db->where('id',$id);
        $result= $this->db->update('store_image',$data);
	}
	
       function storesImage()
	{
	    

	  //print_r($imageName);
	  //exit;
	  //   
	  //multiple image gallery
	  
	    $files = $_FILES['image'];
	    
	    $c=count($_FILES['image']['size']);
	    for($i=0; $i<$c; $i++)
	    {
	    if($files['name'][$i]!="")
	    {
	    
	    $config['upload_path'] = 'uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $_FILES['image']['name'] = $files['name'][$i];
	    $_FILES['image']['type'] = $files['type'][$i];
	    $_FILES['image']['tmp_name'] = $files['tmp_name'][$i];
	    $_FILES['image']['error'] = $files['error'][$i];
	    $_FILES['image']['size'] = $files['size'][$i];
	    $this->load->library('upload', $config);
	    $this->upload->initialize($config);
	    $this->upload->do_upload('image');
	    $data = $this->upload->data();
	    $name_array[] = $data['file_name'];
	    }
	    
	    }
	    $names= implode(",", $name_array);
	    
	    
	    $filedata = $_FILES;

	    if($filedata['imagetext']!="")
	    {
		
	    $config['upload_path'] = 'uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $_FILES['image']['name'] = $filedata['imagetext']['name'];
	    $_FILES['image']['type'] = $filedata['imagetext']['type'];
	    $_FILES['image']['tmp_name'] = $filedata['imagetext']['tmp_name'];
	    $_FILES['image']['error'] = $filedata['imagetext']['error'];
	    $_FILES['image']['size'] = $filedata['imagetext']['size'];
	   $this->load->library('upload', $config);
	   $this->upload->initialize($config);
	    $this->upload->do_upload('image');
	    $data3 = $this->upload->data();
	    $imageName = $data3['file_name'];
	    }
	    
	    $data= array(
	    "textImage"=>$imageName,
	   "image"=>$names,
	   "title"=>$this->input->post("title"),
	    "addresstitle"=>$this->input->post("address1"),
	    "address1"=>$this->input->post("address2"),
	    "address2"=>$this->input->post("address3"),
	    "fax"=>$this->input->post("fax"),
	    "phone"=>$this->input->post("phone"),
	    "description"=>$this->input->post("description"),
	    "country"=>$this->input->post("country"),
	    "state"=>$this->input->post("state"),
	    "imagedescription"=>$this->input->post("imgdesciption")
	   );
	    //print_r($data);
	    //exit;
	    
	    $this->db->insert("store_image",$data);
	    
	    
	}
	
	
	function deletecountry($id)
	 {

	    $this->db->where("id",$id);
	$this->db->delete("ourcountry");	

	  
	 }
	
	
	function deletestates($id)
	 {

	    $this->db->where("id",$id);
	$this->db->delete("ourstate");	

	  
	 }
	
	
	
	
	///////////////////////////////////HAKKIM MODEL END***********************************************************************

	///////////////////////////////////ELANGO MODEL START*********************************************************************

//2.Client Overview START
	function GetClientOverview($id)
	 {
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$sql="SELECT * FROM ar_clientoverview";
		return $query = $this->db->query($sql)->result_array();
	    }
	    else
	    {
		$sql="SELECT * FROM clientoverview";
		return $query = $this->db->query($sql)->result_array();
	    }
	 }
	function clientOverviewDetails()
	{
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where('id',1);
		return $this->db->get("ar_clientoverview")->result_array();
	    }
	    else
	    {
		$this->db->where('id',1);
		return $this->db->get("clientoverview")->result_array();
	    }		
	}
    
	public function getclientImage()
	 {
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$sql="SELECT * FROM ar_about_client_img ORDER BY position";
		return   $query = $this->db->query($sql)->result_array();
	    }
	    else
	    {
		$sql="SELECT * FROM about_client_img ORDER BY position";
		return   $query = $this->db->query($sql)->result_array();
	    }
	 }
	 //ON/OFF STATUS FUNCTION
	public function getStatusclientImages($id)
	  {
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$sql="SELECT * FROM ar_about_client_img where id=$id";
		return $query = $this->db->query($sql)->result_array();
	    }
	    else
	    {
		$sql="SELECT * FROM about_client_img where id=$id";
		return $query = $this->db->query($sql)->result_array();
	    }
	  }
	  //ON/OFF STATUS FUNCTION
function ClientOverview_Add()
 {
     $data = array(
		 "title"=>$this->input->post("title"),
		 "subTitle"=>$this->input->post("subtitle"),
		 "description"=>$this->input->post("description")
		 );
     if($this->session->userdata('browserLanguage')=='ar')
     {
	$this->db->where('id',1);
	return $this->db->update("ar_clientoverview",$data);        
     }
     else
     {
	$this->db->where('id',1);
	return $this->db->update("clientoverview",$data);        
     }
 }
	

function clientImage_Add ()
 {
    if($this->session->userdata('browserLanguage')=='ar')
    {
	$sql="SELECT * FROM ar_about_client_img ORDER BY position";
	$query = $this->db->query($sql)->result_array();
    }
    else
    {
	$sql="SELECT * FROM about_client_img ORDER BY position";
	$query = $this->db->query($sql)->result_array();
    }
     //multiple image gallery
     $files = $_FILES['image'];
     $c=count($_FILES['image']['size']);
     for($i=0; $i<$c; $i++)
     {
     if($files['name'][$i]!=""){
     $config['upload_path'] = 'uploads/';
     $config['allowed_types'] = 'gif|jpg|png';
     $_FILES['image']['name'] = $files['name'][$i];
     $_FILES['image']['type'] = $files['type'][$i];
     $_FILES['image']['tmp_name'] = $files['tmp_name'][$i];
     $_FILES['image']['error'] = $files['error'][$i];
     $_FILES['image']['size'] = $files['size'][$i];
     $this->load->library('upload', $config);
     $this->upload->initialize($config);
     $this->upload->do_upload('image');
     $data = $this->upload->data();
     $name_array[] = $data['file_name'];
     }
    
     }
     $names= implode(',', $name_array);
     
     $data= array(
		      
	   "aboutClientImg"=>$names,
	   "position"=>count($query)+1,
	   "status"=>"ENABLED",
	   "aboutClientTitle"=>$this->input->post("aboutClientTitle")
	   );
          if($this->session->userdata('browserLanguage')=='ar')
	  {
	    $this->db->insert("ar_about_client_img",$data);
	  }
	  else
	  {
	    $this->db->insert("about_client_img",$data);    
	  }
 }

//Edit client Image
function GetDocsClients($id)
 {
    if($this->session->userdata('browserLanguage')=='ar')
    {
	$this->db->where("id","$id");
	return  $this->db->get("ar_about_client_img")->result_array();
    }
    else
    {
	$this->db->where("id","$id");
	return  $this->db->get("about_client_img")->result_array();
    }
 }
function ClientImage_Edit($id)
 {
   //multiple image gallery
  
      $files = $_FILES['image'];
      $c=count($_FILES['image']['name']);
      for($i=0; $i<$c; $i++)
      {
       $files['name'][$i];
      if($files['name'][$i]!=""){
      $config['upload_path'] = 'uploads/';
      $config['allowed_types'] = 'gif|jpg|png';
      $_FILES['image']['name'] = $files['name'][$i];
      $_FILES['image']['type'] = $files['type'][$i];
      $_FILES['image']['tmp_name'] = $files['tmp_name'][$i];
      $_FILES['image']['error'] = $files['error'][$i];
      $_FILES['image']['size'] = $files['size'][$i];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      $this->upload->do_upload('image');
      $data = $this->upload->data();
      $name_array[] = $data['file_name'];
      }
       else {
  
     $name_array[] = $_POST['oldimage'][$i];
     }
     }
     $names= implode(',', $name_array);
     $data = array(
    
	    "aboutClientImg"=>$names,
	    "aboutClientTitle"=>$this->input->post("aboutClientTitle")
	    );
        if($this->session->userdata('browserLanguage')=='ar')
	{
	    $this->db->where("id",$id);
	    $this->db->update("ar_about_client_img",$data);
	}
	else
	{
	    $this->db->where("id",$id);
	    $this->db->update("about_client_img",$data);
	}
      }
public function ClientDelete($id)
 {
    if($this->session->userdata('browserLanguage')=='ar')
    {
	$this->db->where("id",$id);
	$this->db->delete("ar_about_client_img");
    }
    else
    {
	$this->db->where("id",$id);
	$this->db->delete("about_client_img");	
    }
 }
//Client Overview END
	

public function getformdata()
 {
    // return $this->db->get('about_project_img')->result_array();
	if($this->session->userdata('browserLanguage')=='ar')
	{
	    $sql="SELECT * FROM ar_about_project_img ORDER BY position";
	    return   $query = $this->db->query($sql)->result_array();
	}
	else
	{
	    $sql="SELECT * FROM about_project_img ORDER BY position";
	    return   $query = $this->db->query($sql)->result_array();
	}
 }
 public function getStatusProjectImages($id)
    {
	//$businessId=$this->session->userdata('businessId');
	if($this->session->userdata('browserLanguage')=='ar')
	{
	    $sql="SELECT * FROM ar_about_project_img where id=$id";
	    return $query = $this->db->query($sql)->result_array();
	}
	else
	{
	    $sql="SELECT * FROM about_project_img where id=$id";
	    return $query = $this->db->query($sql)->result_array();
	}
    
    }
    
function Projectimage_Add()
 {
    if($this->session->userdata('browserLanguage')=='ar')
    {
	$sql="SELECT * FROM ar_about_project_img ORDER BY position";
	$query = $this->db->query($sql)->result_array();
    }
    else
    {
	$sql="SELECT * FROM about_project_img ORDER BY position";
	$query = $this->db->query($sql)->result_array();
    }
     //multiple image gallery
     $files = $_FILES['image'];
     $c=count($_FILES['image']['size']);
     for($i=0; $i<$c; $i++)
     {
	 if($files['name'][$i]!="")
	 {
	     $config['upload_path'] = 'uploads/';
	     $config['allowed_types'] = 'gif|jpg|png';
	     $_FILES['image']['name'] = $files['name'][$i];
	     $_FILES['image']['type'] = $files['type'][$i];
	     $_FILES['image']['tmp_name'] = $files['tmp_name'][$i];
	     $_FILES['image']['error'] = $files['error'][$i];
	     $_FILES['image']['size'] = $files['size'][$i];
	     $this->load->library('upload', $config);
	     $this->upload->initialize($config);
	     $this->upload->do_upload('image');
	     $data = $this->upload->data();
	     $name_array[] = $data['file_name'];
	 }	
     }
     $names= implode(',', $name_array);
     $data= array(
     
     "projectImage"=>$names,
     "position"=>count($query)+1,
     "status"=>"ENABLED",
     "projectImgTitle"=>$this->input->post("projectImgTitle")
     );
    if($this->session->userdata('browserLanguage')=='ar')
    {
	$this->db->insert("ar_about_project_img",$data);
    }
    else{
	$this->db->insert("about_project_img",$data);
    }
 }
 function ProjectImage_Edit($id)
 {
     //multiple image gallery
  
      $files = $_FILES['image'];
      $c=count($_FILES['image']['name']);
      for($i=0; $i<$c; $i++)
      {
       $files['name'][$i];
      if($files['name'][$i]!="")
      {
      $config['upload_path'] = 'uploads/';
      $config['allowed_types'] = 'gif|jpg|png';
      $_FILES['image']['name'] = $files['name'][$i];
      $_FILES['image']['type'] = $files['type'][$i];
      $_FILES['image']['tmp_name'] = $files['tmp_name'][$i];
      $_FILES['image']['error'] = $files['error'][$i];
      $_FILES['image']['size'] = $files['size'][$i];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      $this->upload->do_upload('image');
      $data = $this->upload->data();
      $name_array[] = $data['file_name'];
      }
       else {
     $name_array[] = $_POST['oldimage'][$i];
     }
     }
     $names= implode(',', $name_array);
     $data = array(
	    "projectImage"=>$names,
	    "projectImgTitle"=>$this->input->post("projectImgTitle")
	   );
           if($this->session->userdata('browserLanguage')=='ar')
	   {
		$this->db->where("id",$id);
		$this->db->update("ar_about_project_img",$data);
	   }
	   else
	   {
		$this->db->where("id",$id);
		$this->db->update("about_project_img",$data);
	   }
 }
 
public function ProjectDelete($id)
 {
    if($this->session->userdata('browserLanguage')=='ar')
    {
	$this->db->where("id",$id);
	$this->db->delete("ar_about_project_img");
    }
    else
    {
	$this->db->where("id",$id);
	$this->db->delete("about_project_img");
    }	       
 }
function GetDocs($id)
 {
    if($this->session->userdata('browserLanguage')=='ar')
    {
	$this->db->where("id","$id");
	return  $this->db->get("ar_about_project_img")->result_array();
    }
    else
    {
	$this->db->where("id","$id");
	return  $this->db->get("about_project_img")->result_array();
    }
 }
 
 //3.Franching Oppurnites
   //ADD
public function getOpportunities()
 {
    if($this->session->userdata('browserLanguage')=='ar')
    {
	return $this->db->get('ar_franchising_opportunities')->result_array();
    }
    else
    {
	return $this->db->get('franchising_opportunities')->result_array();
    }
 }
function FranchisingOpportunities_Add ()
 {
    $data= array(
	       
    "franchisingTitle"=>$this->input->post("franchisingTitle"),
    "franchisingDetails"=>$this->input->post("franchisingDetails")
    );
    if($this->session->userdata('browserLanguage')=='ar')
    {
	$this->db->insert("ar_franchising_opportunities",$data);
    }
    else
    {
	$this->db->insert("franchising_opportunities",$data);
    }
 }

//EDIT
function GetopportunitiesEdit($id)
 {
    if($this->session->userdata('browserLanguage')=='ar')
    {
	$this->db->where("id","$id");
	return  $this->db->get("ar_franchising_opportunities")->result_array();
    }
    else
    {
	$this->db->where("id","$id");
	return  $this->db->get("franchising_opportunities")->result_array();
    }
 }
function FranchisingOpportunities_Edit($id)
 {
    $data = array(
    "franchisingTitle"=>$this->input->post("franchisingTitle"),
    "franchisingDetails"=>$this->input->post("franchisingDetails")
    );
    if($this->session->userdata('browserLanguage')=='ar')
    {
	$this->db->where("id",$id);
	$this->db->update("ar_franchising_opportunities",$data);
    }
    else
    {
	$this->db->where("id",$id);
	$this->db->update("franchising_opportunities",$data);
    }
 }
//DELETE
public function FranchisingOpportunities_Delete($id)
   {
    if($this->session->userdata('browserLanguage')=='ar')
    {
	$this->db->where("id",$id);
	$this->db->delete("ar_franchising_opportunities");
    }
    else
    {
	$this->db->where("id",$id);
	$this->db->delete("franchising_opportunities");
    }
}
//Franchising Opp End

//5.Products Start 
public function getproducts()
 {
    if($this->session->userdata('browserLanguage')=='ar')
    {
	return $this->db->get('ar_products')->result_array();
    }
    else
    {
	return $this->db->get('products')->result_array();
    }
 }
function Products_Add ()
{
 //Single Image Upload
        $url=$config['upload_path'] ='uploads/';
	$config['allowed_types'] = 'gif|jpg|png';
	$this->load->library('upload', $config);
	$this->upload->do_upload('imagename');
	$productImage =  $this->upload->data();
	$path=site_url($url.$productImage['file_name']);
 
 //multiple image gallery
    $files = $_FILES['image'];
    $c=count($_FILES['image']['size']);
    for($i=0; $i<$c; $i++)
    {
    if($files['name'][$i]!=""){
    $config['upload_path'] = 'uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $_FILES['image']['name'] = $files['name'][$i];
    $_FILES['image']['type'] = $files['type'][$i];
    $_FILES['image']['tmp_name'] = $files['tmp_name'][$i];
    $_FILES['image']['error'] = $files['error'][$i];
    $_FILES['image']['size'] = $files['size'][$i];
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    $this->upload->do_upload('image');
    $data = $this->upload->data();
    $name_array[] = $data['file_name'];
    }
    }
    $names= implode(',', $name_array);
          $data= array(
		       "brandId"=>$this->input->post("brandId"),
		       "productCategory"=>$this->input->post("productCat"),
		       "productMaterial"=>$this->input->post("productMat"),
		       "productAccessories"=>$this->input->post("productAcc"),
		       "productName"=>$this->input->post("productName"),
		       "motor"=>$this->input->post("MotorOn"),
		       //"productLink"=>$this->input->post("productLink"),
		       "productDescription"=>$this->input->post("productDesc"),
		       "productMultiImage"=>$names,
		       "productImage"=>$productImage['file_name']
	  );
	  
	  
	  //print_r($data);
	  //exit;
	  $this->db->insert("products",$data);
	  $insert_id = $this->db->insert_id();
	  $data1= array(
		
		      "productId"=>$insert_id,
		      
		      //"productImagesPath"=>$this->input->post("motor")
		      );
	  if($this->session->userdata('browserLanguage')=='ar')
	    {
    		$this->db->insert("ar_productimages",$data1);
	    }
	    else
	    {
		$this->db->insert("productimages",$data1);
	    }
}
//EDIT
function GetProductsEdit($id)
        {
	if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id","$id");
		return  $this->db->get("ar_products")->result_array();
	    }
	    else
	    {
		$this->db->where("id","$id");
		return  $this->db->get("products")->result_array();
	    }
	}
function GetProductsMultiImage($id)
        {
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id",$id);
		return $result=  $this->db->get("ar_products")->result_array();
	    }
	    else
	    {
		$this->db->where("id",$id);
		return $result=  $this->db->get("products")->result_array();
	    }
	   //print_r($result);
	   //echo $id;
	   //exit;
	}	
function Products_Edit($id)
{
 
 //Single Image Upload Edit
 if($_FILES['imagename']['name']=="")
    	{
    	    $path=$this->input->post('getimage');
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('imagename');
	    $data =  $this->upload->data();
	    $path=$data['file_name'];
	}
 //multiple image gallery

    $files = $_FILES['image'];
    $c=count($_FILES['image']['name']);
    for($i=0; $i<$c; $i++)
    {
     $files['name'][$i];
    if($files['name'][$i]!=""){
    $config['upload_path'] = 'uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $_FILES['image']['name'] = $files['name'][$i];
    $_FILES['image']['type'] = $files['type'][$i];
    $_FILES['image']['tmp_name'] = $files['tmp_name'][$i];
    $_FILES['image']['error'] = $files['error'][$i];
    $_FILES['image']['size'] = $files['size'][$i];
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    $this->upload->do_upload('image');
    $data = $this->upload->data();
    $name_array[] = $data['file_name'];
    }
     else {

	  $name_array[] = $_POST['oldimage'][$i];
	  }
   }
   $names= implode(',', $name_array);
	   $data= array(
		       "brandId"=>$this->input->post("brandId"),
		       "productCategory"=>$this->input->post("productCat"),
		       "productMaterial"=>$this->input->post("productMat"),
		       "productAccessories"=>$this->input->post("productAcc"),
		       "productName"=>$this->input->post("productName"),
		       "motor"=>$this->input->post("MotorOn"),
		       //"productLink"=>$this->input->post("productLink"),
		       "productImage"=>$path,
		       "productMultiImage"=>$names,
		       "productDescription"=>$this->input->post("productDesc")
		      
		      );
	   if($this->session->userdata('browserLanguage')=='ar')
	    {
                $this->db->where("id",$id);
                $this->db->update("ar_products",$data);
	    }
	    else
	    {
		$this->db->where("id",$id);
                $this->db->update("products",$data);
	    }
}
//DELETE
public function Products_Delete($id)
   {
    if($this->session->userdata('browserLanguage')=='ar')
    {
	$this->db->where("id",$id);
	$this->db->delete("ar_products");
    }
    else
    {
	$this->db->where("id",$id);
	$this->db->delete("products");
    }
}
//6.Explore Brands Start
public function getbrands()
        {
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		return $this->db->get('ar_explore_brand')->result_array();
	    }
	    else
	    {
		return $this->db->get('explore_brand')->result_array();
	    }
        }
function Brands_Add ()
{
 //multiple image gallery
    $files = $_FILES['image'];
    $c=count($_FILES['image']['size']);
    for($i=0; $i<$c; $i++)
    {
    if($files['name'][$i]!=""){
    $config['upload_path'] = 'uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $_FILES['image']['name'] = $files['name'][$i];
    $_FILES['image']['type'] = $files['type'][$i];
    $_FILES['image']['tmp_name'] = $files['tmp_name'][$i];
    $_FILES['image']['error'] = $files['error'][$i];
    $_FILES['image']['size'] = $files['size'][$i];
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    $this->upload->do_upload('image');
    $data = $this->upload->data();
    $name_array[] = $data['file_name'];
    }
   
    }
    $names= implode(',', $name_array);
          $data= array(
		       "bName"=>$this->input->post("bName"),
		       "brandDescription"=>$this->input->post("brandDescription"),
		       "bImage"=>$names
	  );
	  if($this->session->userdata('browserLanguage')=='ar')
	{
	    $this->db->insert("ar_explore_brand",$data);
	}
	else
	{
	    $this->db->insert("explore_brand",$data);
	}
}
//EDIT
function GetBrandsEdit($id)
        {
	     if($this->session->userdata('browserLanguage')=='ar')
	    {
                $this->db->where("id","$id");
		return  $this->db->get("ar_explore_brand")->result_array();
	    }
	    else
	    {
		$this->db->where("id","$id");
		return  $this->db->get("explore_brand")->result_array();
	    }
	}
function Brands_Edit($id)
{
 //multiple image gallery

    $files = $_FILES['image'];
    $c=count($_FILES['image']['name']);
    for($i=0; $i<$c; $i++)
    {
     $files['name'][$i];
    if($files['name'][$i]!=""){
    $config['upload_path'] = 'uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $_FILES['image']['name'] = $files['name'][$i];
    $_FILES['image']['type'] = $files['type'][$i];
    $_FILES['image']['tmp_name'] = $files['tmp_name'][$i];
    $_FILES['image']['error'] = $files['error'][$i];
    $_FILES['image']['size'] = $files['size'][$i];
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    $this->upload->do_upload('image');
    $data = $this->upload->data();
    $name_array[] = $data['file_name'];
    }
     else {

   $name_array[] = $_POST['oldimage'][$i];
   }
   }
   $names= implode(',', $name_array);
 $data = array(
	               "bName"=>$this->input->post("bName"),
		       "brandDescription"=>$this->input->post("brandDescription"),
		       "bImage"=>$names
	       );
		if($this->session->userdata('browserLanguage')=='ar')
		{
		    $this->db->where("id",$id);
		    $this->db->update("ar_explore_brand",$data);
		}
		else
		{
		    $this->db->where("id",$id);
		    $this->db->update("explore_brand",$data);
		}
}
//DELETE
    public function Brands_Delete($id)
    {
	if($this->session->userdata('browserLanguage')=='ar')
	{
	    $this->db->where("id",$id);
	    $this->db->delete("ar_explore_brand");
	}
	else
	{
	    $this->db->where("id",$id);
	    $this->db->delete("explore_brand");
	}
    }
	
//6.Brands New	
public function getbrandsView()
        {
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$sql="SELECT * FROM ar_brands ORDER BY position";
		return   $query = $this->db->query($sql)->result_array();
	    }
	    else
	    {
		$sql="SELECT * FROM brands ORDER BY position";
		return   $query = $this->db->query($sql)->result_array();
	    }
          
        }
	 //ON/OFF STATUS FUNCTION
	public function getStatusBrandNew($id)
	  {
	    if($this->session->userdata('browserLanguage')=='ar')
	    { 
		$sql="SELECT * FROM ar_brands where id=$id";
		return $query = $this->db->query($sql)->result_array();
	    }
	    else
	    {
		$sql="SELECT * FROM brands where id=$id";
		return $query = $this->db->query($sql)->result_array();
	    }
	  }
	  //ON/OFF STATUS FUNCTION
//Add
function BrandsNew_Add()
{
        if($this->session->userdata('browserLanguage')=='ar')
	{
	    $sql="SELECT * FROM ar_brands ORDER BY position";
	    $query = $this->db->query($sql)->result_array();
	}
	else
	{
	    $sql="SELECT * FROM brands ORDER BY position";
	    $query = $this->db->query($sql)->result_array();
	}
 //multiple image gallery
       $url=$config['upload_path'] ='uploads/';
	$config['allowed_types'] = 'gif|jpg|png';
	$this->load->library('upload', $config);
	$this->upload->do_upload('image');
	$data =  $this->upload->data();
	$path=site_url($url.$data['file_name']);
	
	
    //multiple image gallery
        $url=$config['upload_path'] ='uploads/';
	$config['allowed_types'] = 'gif|jpg|png';
	$this->load->library('upload', $config);
	$this->upload->do_upload('imagename');
	$data2 =  $this->upload->data();
	$path=site_url($url.$data['file_name']);
	
	
          $data= array(
		       "name"=>$this->input->post("name"),
		       "desc"=>$this->input->post("desc"),
		       "linkTitle"=>$this->input->post("linkTitle"),
		       "position"=>count($query)+1,
		       "status"=>"ENABLED",
		       'nameImage'=>$data['file_name'],
		       'BrandImage'=>$data2['file_name']
		     
		       );
	if($this->session->userdata('browserLanguage')=='ar')
	{
	    $this->db->insert("ar_brands",$data);
	}
	else
	{
	    $this->db->insert("brands",$data);
	}
}

//EDIT
function GetBrandsNewEdit($id)
        {
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id","$id");
		return  $this->db->get("ar_brands")->result_array();
	    }
	    else
	    {
		$this->db->where("id","$id");
		return  $this->db->get("brands")->result_array();
	    }
	}
function BrandsNew_Edit($id)
{
       if($_FILES['image']['name']=="")
    	{
    	    $path=$this->input->post('getimage');
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('image');
	    $data =  $this->upload->data();
	    $path=$data['file_name'];
	}
	
	if($_FILES['imagename']['name']=="")
    	{
    	    $path2=$this->input->post('getimage1');
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('imagename');
	    $data =  $this->upload->data();
	    $path2=$data['file_name'];
	}
	
          $data= array(
		       "name"=>$this->input->post("name"),
		       "desc"=>$this->input->post("desc"),
		       "linkTitle"=>$this->input->post("linkTitle"),
		       'nameImage'=>$path,
		       'BrandImage'=>$path2
		       );
	   if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id",$id);
                $this->db->update("ar_brands",$data);
	    }
	    else
	    {
		$this->db->where("id",$id);
                $this->db->update("brands",$data);
	    }
}
//DELETE
    public function BrandsNew_Delete($id)
    {
	if($this->session->userdata('browserLanguage')=='ar')
	{
	    $this->db->where("id",$id);
	    $this->db->delete("ar_brands");
	}
	else
	{
	    $this->db->where("id",$id);
	    $this->db->delete("brands");
	}
    }
//7.Product Category Start
public function getProductCategoryView()
    {
       // return $this->db->get('productCategory')->result_array();
       if($this->session->userdata('browserLanguage')=='ar')
	{
	    $sql="SELECT * FROM ar_productCategory ORDER BY position";
	    return   $query = $this->db->query($sql)->result_array();
	}
	else
	{
	    $sql="SELECT * FROM productCategory ORDER BY position";
	    return   $query = $this->db->query($sql)->result_array();
	}
    }
    // ON OFF FUNCTION
public function getStatusProductCategory($id)
   {
       if($this->session->userdata('browserLanguage')=='ar')
	{
           $sql="SELECT * FROM ar_productcategory where id=$id";
           return $query = $this->db->query($sql)->result_array();
	}
	else
	{
	    $sql="SELECT * FROM productcategory where id=$id";
	    return $query = $this->db->query($sql)->result_array();

	}
   }
   //ON OFF FUNCTION
//Add
function ProductCategory_Add()
{
    if($this->session->userdata('browserLanguage')=='ar')
    {
        $sql="SELECT * FROM ar_productcategory ORDER BY position";
        $query = $this->db->query($sql)->result_array();
    }
    else
    {
	    $sql="SELECT * FROM productcategory ORDER BY position";
	    $query = $this->db->query($sql)->result_array();
    }
 //multiple image gallery
        $url=$config['upload_path'] ='uploads/';
	$config['allowed_types'] = 'gif|jpg|png';
	$this->load->library('upload', $config);
	$this->upload->do_upload('image');
	$data =  $this->upload->data();
	$path=site_url($url.$data['file_name']);
	
          $data= array(
		       "name"=>$this->input->post("name"),
		       "position"=>count($query)+1,
		       "status"=>"ENABLED",
		       "image"=>$data['file_name']
		       );
	if($this->session->userdata('browserLanguage')=='ar')
	{
	    $this->db->insert("ar_productCategory",$data);
	}
	else
	{
	    $this->db->insert("productCategory",$data);
	}
}

//EDIT
function GetProductCatNewEdit($id)
        {
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id","$id");
		return  $this->db->get("ar_productCategory")->result_array();
	    }
	    else
	    {
		$this->db->where("id","$id");
		return  $this->db->get("productCategory")->result_array();
	    }
	}
function ProductCategory_Edit($id)
{
   if($_FILES['image']['name']=="")
    	{
    	    $path=$this->input->post('getimage');
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('image');
	    $data =  $this->upload->data();
	    $path=$data['file_name'];
	}
	
	
          $data= array(
		       "name"=>$this->input->post("name"),
		       "image"=>$path
		       );
	if($this->session->userdata('browserLanguage')=='ar')
	{
    	    $this->db->where("id",$id);
            $this->db->update("ar_productCategory",$data);
	}
	else
	{
	    $this->db->where("id",$id);
            $this->db->update("productCategory",$data);
	}
}
//DELETE
    public function ProductCategory_Delete($id)
    {
	if($this->session->userdata('browserLanguage')=='ar')
	{
	    $this->db->where("id",$id);
	    $this->db->delete("ar_productCategory");
	}
	else
	{
	    $this->db->where("id",$id);
	    $this->db->delete("productCategory");	
	}
    }
//7.News
    // ON OFF FUNCTION
    public function getStatusNews($id)
       {
	   if($this->session->userdata('browserLanguage')=='ar')
	    {
		$sql="SELECT * FROM ar_news where id=$id";
		return $query = $this->db->query($sql)->result_array();
	    }
	    else
	    {
		$sql="SELECT * FROM news where id=$id";
		return $query = $this->db->query($sql)->result_array();
	    }
       }
   //ON OFF FUNCTION
     public function getnewsView()
        {
	   if($this->session->userdata('browserLanguage')=='ar')
	    { 
	        return $this->db->get('ar_news')->result_array();
	    }
	    else
	    {
		return $this->db->get('news')->result_array();
	    }
        }				
	//Add
     function News_Add()
      {
       //multiple image gallery
	      $url=$config['upload_path'] ='uploads/';
	      $config['allowed_types'] = 'gif|jpg|png';
	      $this->load->library('upload', $config);
	      $this->upload->do_upload('image');
	      $data =  $this->upload->data();
	      $path=site_url($url.$data['file_name']);
	      
	      //multiple image gallery
	      $url=$config['upload_path'] ='uploads/';
	      $config['allowed_types'] = 'gif|jpg|png';
	      $this->load->library('upload', $config);
	      $this->upload->do_upload('imagename');
	      $data2 =  $this->upload->data();
	      $path=site_url($url.$data['file_name']);
	      
		$data= array(
			     "newsType"=>$this->input->post("newsType"),
			     "newsImage"=>$data['file_name'],
			     'imageInside'=>$data2['file_name'],
			     "status"=>"ENABLED",
			     "newsDescription"=>$this->input->post("newsDesc"),
			     "contentDesc"=>$this->input->post("contentDesc"),
			     "subTitle"=>$this->input->post("subTitle")
			     );
		if($this->session->userdata('browserLanguage')=='ar')
		{
		    $this->db->insert("ar_news",$data);
		}
		else
		{
		    $this->db->insert("news",$data);
		}
	  //print_r($data);
	  //  exit; 
      }
//EDIT
function GetNewsEdit($id)
        {
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id","$id");
		return  $this->db->get("ar_news")->result_array();
	    }
	    else
	    {
		$this->db->where("id","$id");
		return  $this->db->get("news")->result_array();
	    }
	}
function News_Edit($id)
{
   if($_FILES['image']['name']=="")
    	{
    	    $path=$this->input->post('getimage');
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('image');
	    $data =  $this->upload->data();
	    $path=$data['file_name'];
	}
	if($_FILES['imagename']['name']=="")
    	{
    	    $path2=$this->input->post('getimage1');
	   
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('imagename');
	    $data =  $this->upload->data();
	    $path2=$data['file_name'];
	}
	
          $data= array(
		       "newsType"=>$this->input->post("newsType"),
		       "newsImage"=>$path,
		       'imageInside'=>$path2,
		        "newsDescription"=>$this->input->post("newsDesc"),
			"contentDesc"=>$this->input->post("contentDesc"),
			 "subTitle"=>$this->input->post("subTitle")
		       );
	    if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id",$id);
                $this->db->update("ar_news",$data);
	    }
	    else
	    {
		$this->db->where("id",$id);
                $this->db->update("news",$data);
	    }
	    //print_r($data);
	    //exit; 
}
//DELETE
    public function News_Delete($id)
    {
	if($this->session->userdata('browserLanguage')=='ar')
	    {
		$this->db->where("id",$id);
		$this->db->delete("ar_news");
	    }
	    else
	    {
		$this->db->where("id",$id);
		$this->db->delete("news");	
	    }
    }
	///////////////////////////////////ELANGO MODEL END***********************************************************************
	
	
	
//function Projectimage_Add()
//        {
//        $data = array(
//                    "projectImage"=>$this->input->post("imageName"),
//		     "projectImgTitle"=>$this->input->post("imageName")
//		    );
//      
//        $this->db->insert("about_project_img",$data);
//            
//        	
//$files=$_FILES['image'];
//$c=count($_FILES['image']['size']);
//for($i=0; $i<$c;$i++)
//{
// if($files['image'][$i]!=""){
//  $config['upload_path']='uploads/'
//  $config['allowed_types']='gifs/jpg/png';
//  $FILES['image']['name']=$files['name'][$i];
//  $FILES['image']['name']=$files['type'][$i];
//  $FILES['image']['tmp_name']=$files['tmp_name'][$i];
//  $FILES['image']['error']=$files['error'][$i];
//  $FILES['image']['size']=$files['size'][$i];
//  $this->load->library('upload',$config);
//  $this->upload->intalize($config);
//  $this->upload->do_upload('image');
//  $data=$this->upload->data();
//  $name_array[]=$data['file_name'];
//  }
//}
//}
//
}

