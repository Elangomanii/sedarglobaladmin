<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FranchiseModel extends CI_Model {
    //Start menu in header
    
    //Home page
    //Author : Gobi
    public function get_homedata()
   {
    $sql ="select * from home";
    return $query = $this->db->query($sql)->result_array();
    
   }
     public function update_home()
   {
        
        if($_FILES['logo']['name']=="")
    	{
    	    $logo=$this->input->post('old_logo');
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/home';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('logo');
	    $data =  $this->upload->data();
	    $logo=$data['file_name'];
	}
        
        if($_FILES['slider_image_1']['name']=="")
    	{
    	    $slider_image_1=$this->input->post('old_slider_image_1');
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/home';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('slider_image_1');
	    $data =  $this->upload->data();
	    $slider_image_1=$data['file_name'];
	}
        
        if($_FILES['slider_image_2']['name']=="")
    	{
    	    $slider_image_2=$this->input->post('old_slider_image_2');
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/home';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('slider_image_2');
	    $data =  $this->upload->data();
	    $slider_image_2=$data['file_name'];
	}
        if($_FILES['slider_image_3']['name']=="")
    	{
    	    $slider_image_3=$this->input->post('old_slider_image_3');
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/home';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('slider_image_3');
	    $data =  $this->upload->data();
	    $slider_image_3=$data['file_name'];
	}
        if($_FILES['slider_image_4']['name']=="")
    	{
    	    $slider_image_4=$this->input->post('old_slider_image_4');
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/home';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('slider_image_4');
	    $data =  $this->upload->data();
	    $slider_image_4=$data['file_name'];
	}
        
        if($_FILES['gal_img1']['name']=="")
    	{
    	    $gal_img1=$this->input->post('old_gal_img1');
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/home';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('gal_img1');
	    $data =  $this->upload->data();
	    $gal_img1=$data['file_name'];
	}
        if($_FILES['gal_img2']['name']=="")
    	{
    	    $gal_img2=$this->input->post('old_gal_img2');
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/home';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('gal_img2');
	    $data =  $this->upload->data();
	    $gal_img2=$data['file_name'];
	}
        if($_FILES['gal_img3']['name']=="")
    	{
    	    $gal_img3=$this->input->post('old_gal_img3');
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/home';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('gal_img3');
	    $data =  $this->upload->data();
	    $gal_img3=$data['file_name'];
	}
        if($_FILES['gal_img4']['name']=="")
    	{
    	    $gal_img4=$this->input->post('old_gal_img4');
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/home';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('gal_img4');
	    $data =  $this->upload->data();
	    $gal_img4=$data['file_name'];
	}
	
	if($_FILES['gal_img5']['name']=="")
    	{
    	    $gal_img5=$this->input->post('old_gal_img5');
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/home';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('gal_img5');
	    $data =  $this->upload->data();
	    $gal_img5=$data['file_name'];
	}
	
	if($_FILES['gal_img6']['name']=="")
    	{
    	    $gal_img6=$this->input->post('old_gal_img6');
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/home';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('gal_img6');
	    $data =  $this->upload->data();
	    $gal_img6=$data['file_name'];
	}
	
	
        if($_FILES['news_img1']['name']=="")
    	{
    	    $news_img1=$this->input->post('old_news_img1');
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/home';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('news_img1');
	    $data =  $this->upload->data();
	    $news_img1=$data['file_name'];
	}
        if($_FILES['news_img2']['name']=="")
    	{
    	    $news_img2=$this->input->post('old_news_img2');
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/home';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('news_img2');
	    $data =  $this->upload->data();
	    $news_img2=$data['file_name'];
	}
        if($_FILES['news_img3']['name']=="")
    	{
    	    $news_img3=$this->input->post('old_news_img3');
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/home';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('news_img3');
	    $data =  $this->upload->data();
	    $news_img3=$data['file_name'];
	}
        if($_FILES['footer_img']['name']=="")
    	{
    	    $footer_img=$this->input->post('old_footer_img');
	}	
	else
	{
	    $url=$config['upload_path'] ='uploads/home';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $r=$this->upload->do_upload('footer_img');
	    $data =  $this->upload->data();
	    $footer_img=$data['file_name'];
	}
       
        $form_data = array(
                    'logo' =>$logo,
		    'CarouselCaption1' =>$this->input->post('CarouselCaption1'),
		    'CarouselCaption2' =>$this->input->post('CarouselCaption2'),
		    'CarouselCaption3' =>$this->input->post('CarouselCaption3'),
		    'CarouselContent1' =>$this->input->post('CarouselContent1'),
		    'CarouselContent2' =>$this->input->post('CarouselContent2'),
		    'CarouselContent3' =>$this->input->post('CarouselContent3'),
		    'CarouselUrl1' =>$this->input->post('CarouselUrl1'),
		    'CarouselUrl2' =>$this->input->post('CarouselUrl2'),
		    'CarouselUrl3' =>$this->input->post('CarouselUrl3'),
		    
                    'slider_image_1' =>$slider_image_1,
                    'slider_image_2' =>$slider_image_2,
                    'slider_image_3' =>$slider_image_3,
                    'slider_image_4' =>$slider_image_4,
		    'GalleryTitle' =>$this->input->post('GalleryTitle'),
                    'gal_img_cap1' =>$this->input->post('gal_img_cap1'),
                    'gal_img_cap2' =>$this->input->post('gal_img_cap2'),
                    'gal_img_cap3' =>$this->input->post('gal_img_cap3'),
                    'gal_img_cap4' =>$this->input->post('gal_img_cap4'),
		    'gal_img_cap5' =>$this->input->post('gal_img_cap5'),
		    'gal_img_cap6' =>$this->input->post('gal_img_cap6'),
                    'gal_img1' =>$gal_img1,
                    'gal_img2' =>$gal_img2,
                    'gal_img3' =>$gal_img3,
                    'gal_img4' =>$gal_img4,
		    'gal_img5' =>$gal_img5,
		    'gal_img6' =>$gal_img6,
                    'news_t1' =>$this->input->post('news_t1'),
                    'news_t2' =>$this->input->post('news_t2'),
                    'news_t3' =>$this->input->post('news_t3'),
                    'news_url1' =>$this->input->post('news_url1'),
                    'news_url2' =>$this->input->post('news_url2'),
                    'news_url3' =>$this->input->post('news_url3'),
                    'news_d1' =>$this->input->post('news_d1'),
                    'news_d2' =>$this->input->post('news_d2'),
                    'news_d3' =>$this->input->post('news_d3'),
                    'news_img1' =>$news_img1,
                    'news_img2' =>$news_img2,
                    'news_img3' =>$news_img3,
                    'footer_img' =>$footer_img,
                   
                  );
//        echo "<pre>";
//	print_r($form_data);
//	echo "</pre>";
//	exit;
//        
        $result1=$this->db->where('id',1);
          $result=  $this->db->update('home',$form_data);
   }
    //about us
    //Author : hakim
    
    function GetAboutUs()
    {
        $sql="SELECT * FROM ABOUT_US";
        return $query = $this->db->query($sql)->result_array();
       
    }
    
    function UpdateAboutUs()
    {
        
         $data = array(
		'about_title' => $this->input->post('about_title'),
		'about_subtitle_1' =>$this->input->post('about_subtitle_1'),
		'about_subtitle_1_paragraph' => $this->input->post('about_subtitle_1_paragraph'),
                'about_subtitle_2' => $this->input->post('about_subtitle_2'),
                'about_subtitle_2_paragraph' => $this->input->post('about_subtitle_2_paragraph'),
                'about_subtitle_3' => $this->input->post('about_subtitle_3'),
                'about_subtitle_3_paragraph' => $this->input->post('about_subtitle_3_paragraph'),
                'Button_Caption' => $this->input->post('Button_Caption'),
                'Button_Url' => $this->input->post('Button_Url')
		);
    
        $result1=$this->db->where('id',1);
        $result=  $this->db->update('about_us',$data);

    }
    // Franchising_service
    //Author Pavithra 12/6/2015
        function GetFranchiseService(){
        
                 return $this->db->get("franchise_service")->result();
        }
        function UpdateFranchiseService(){
        
                $data=array(
                "Service_Title"=>$this->input->post("Service_Title"),
                "Service_Sub_Title"=>$this->input->post("Service_Sub_Title"),
                "Service_Content"=>$this->input->post("Service_Content")
                );
                $this->db->where("id","1");
                $this->db->update("franchise_service",$data);
        
        }
        function GetSupportProgram(){
        
        return $this->db->get("support_programs")->result();
        }
        function UpdateSupportProgram(){
                
                $data=array(
                "support_programs_title"=>$this->input->post("support_programs_title"),
                "support_programs_subtitle"=>$this->input->post("support_programs_subtitle"),
                "support_programs_paragraph"=>$this->input->post("support_programs_paragraph")
                );
                $this->db->where("id","1");
                $this->db->update("support_programs",$data);
        
        }
        function GetConceptBrief(){

                return $this->db->get("concept_brief")->result();
        }
        function UpdateConceptBrief()
          {
                    $url=$config['upload_path'] ='uploads/concept/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $this->load->library('upload', $config);
                    $this->upload->do_upload('userfile');
                    $data =  $this->upload->data();
                    if($data['file_name']==""){
                        $data['file_name']=$this->input->post("ExistingImage");
                    }
                    
               

                
                $data=array(
                "concept_brief_title"=>$this->input->post("concept_brief_title"),
                "concept_brief_paragraph"=>$this->input->post("concept_brief_paragraph"),
                "image_title"=>$this->input->post("image_title"),
                "image"=>$data['file_name'],
                "button_name1"=>$this->input->post("button_name1"),
                "button_url1"=>$this->input->post("button_url1"),
                "button_name2"=>$this->input->post("button_name2"),
                "button_url2"=>$this->input->post("button_url2"),
                "button_name3"=>$this->input->post("button_name3"),
                "button_url3"=>$this->input->post("button_url3")
                
                
                );
                $this->db->where("id","1");
                $this->db->update("concept_brief",$data);
        }
        // Author Elango
          function GetFranchiseTraining()
        {
                  return $this->db->get("franchise_training")->result();
        }
        function UpdateFranchiseTraining()
        {
                  $data = array(
                              "Program_Title"=>$this->input->post("Program_Title"),
                              "Program_Subtitle"=>$this->input->post("Program_Subtitle"),
                              "Program_Content"=>$this->input->post("Program_Content")
                              );
                  $this->db->where("id","1");
                  $this->db->update("franchise_training",$data);
            
        }
         //Contact us
   //Author: Laxmipriya
   
   
         function GetContactData()
         {
         
                    return $this->db->get("contact_us")->result();
         }
         function UpdateContactData(){
         
                  $data=array(
                  "Address_Header"=>$this->input->post("Address_Header"),
                  "Address1"=>$this->input->post("Address1"),
                  "Address2"=>$this->input->post("Address2"),
                  "Address3"=>$this->input->post("Address3"),
                  "Address4"=>$this->input->post("Address4"),
                  "Fax_Id"=>$this->input->post("Fax_Id"),
                  "Mobile_No"=>$this->input->post("Mobile_No"),
                  "Web_Address1"=>$this->input->post("Web_Address1"),
                  "Web_Address2"=>$this->input->post("Web_Address2"),
                  "Official_Websit_caption"=>$this->input->post("Official_Websit_caption"),
                  "Header_Official_Websit"=>$this->input->post("Header_Official_Websit"),
                  "Official_Websit_Address"=>$this->input->post("Official_Websit_Address")
                  
                  );
                  $this->db->where("id","1");
                  $this->db->update("contact_us",$data);
                  
         }
	 
	 
	 
	 
    function FranchiseAuthentication()
	{
	
	$user_id = $this->input->post('user_id');
	$password = md5($this->input->post('password'));
	
	$sql="SELECT * FROM user where Username='$user_id' AND Password='$password'";
	
	return $query = $this->db->query($sql)->result_array();
	
	}
    
    //Add User Start
        //View Page
        function Getuser()
       {
        return $this->db->get("user")->result();
       }
         function Getuserdata($code)
       {
         $this->db->where("ID",$code);
        return $this->db->get("user")->result();
       }
        //View Page
        //Add Start
        function AddFranchiseuser()
        {
        $data = array(
                    "Username"=>$this->input->post("Username"),
                    "Password"=>md5($this->input->post("Password")),
                    "Role"=>$this->input->post("Role"),
                    "HomeEdit"=>$this->input->post("EDIT_HOME_YN"),
                    "AboutUsEdit"=>$this->input->post("EDIT_ABOUT_YN"),
                    "ConceptBriefEdit"=>$this->input->post("EDIT_CONCEPT_YN"),
                    "SupportProgramEdit"=>$this->input->post("EDIT_SUPPORT_YN"),
                    "ServiceEdit"=>$this->input->post("EDIT_SERVICE_YN"),
                    "FranchiseTrainingEdit"=>$this->input->post("EDIT_FRANCHISE_ACTIVE_YN"),
                    "ContactUsEdit"=>$this->input->post("EDIT_CONTACT_YN"),
                    "AboutUsView"=>$this->input->post("VIEW_ABOUT_YN"),
                    "ConceptBriefView"=>$this->input->post("VIEW_CONCEPT_YN"),
                    "SupportProgramView"=>$this->input->post("VIEW_SUPPORT_YN"),
                    "ServiceView"=>$this->input->post("VIEW_SERVICE_YN"),
                    "ContactUsView"=>$this->input->post("VIEW_CONTACT_YN"),
                    "FranchiseTrainingView"=>$this->input->post("VIEW_FRANCHISE_ACTIVE_YN"),
                    "HomeView"=>$this->input->post("VIEW_HOME_YN"),
		    "UserAccess"=>$this->input->post("USER_ACCESS")
                    
                    );
      
        $this->db->insert("user",$data);
            
        }
        //Add End
        //Edit & Update Start
        function EditUser($code)
        {
             $data = array(
                    "Username"=>$this->input->post("Username"),
                    "Password"=>md5($this->input->post("Password")),
                    "Role"=>$this->input->post("Role"),
                    "HomeEdit"=>$this->input->post("EDIT_HOME_YN"),
                    "AboutUsEdit"=>$this->input->post("EDIT_ABOUT_YN"),
                    "ConceptBriefEdit"=>$this->input->post("EDIT_CONCEPT_YN"),
                    "SupportProgramEdit"=>$this->input->post("EDIT_SUPPORT_YN"),
                    "ServiceEdit"=>$this->input->post("EDIT_SERVICE_YN"),
                    "FranchiseTrainingEdit"=>$this->input->post("EDIT_FRANCHISE_ACTIVE_YN"),
                    "ContactUsEdit"=>$this->input->post("EDIT_CONTACT_YN"),
                    "AboutUsView"=>$this->input->post("VIEW_ABOUT_YN"),
                    "ConceptBriefView"=>$this->input->post("VIEW_CONCEPT_YN"),
                    "SupportProgramView"=>$this->input->post("VIEW_SUPPORT_YN"),
                    "ServiceView"=>$this->input->post("VIEW_SERVICE_YN"),
                    "ContactUsView"=>$this->input->post("VIEW_CONTACT_YN"),
                    "FranchiseTrainingView"=>$this->input->post("VIEW_FRANCHISE_ACTIVE_YN"),
                    "HomeView"=>$this->input->post("VIEW_HOME_YN"),
		    "UserAccess"=>$this->input->post("USER_ACCESS")
                    
                    );
     
         $this->db->where("ID",$code);
        $this->db->update("user",$data);
        
        }
        //Edit & Update End
        //Delete Start
        
        
        //Delete End
        function User_Delete($id)
	{
	    $this->db->where("ID",$id);
	    $this->db->delete("user");
        
	}
        
        //Add User End
        
	function GetCountry()
	{
	     return $this->db->get("country")->result();
	}
        
      function CountryAdd()
      {
	$data = array(
                    "countryId"=>$this->input->post("countryId"),
                    "countrydiscription"=>$this->input->post("countrydiscription"),
		    );
	 $this->db->insert("country",$data);
      }
      
      function GetSingleCountry($id)
      {
	$this->db->where("id",$id);
        return $this->db->get("country")->result();
      }
      function CountryEdit($code)
      {
	 $data = array(
                    "countryId"=>$this->input->post("countryId"),
                    "countrydiscription"=>$this->input->post("countrydiscription"),
		    );
     
         $this->db->where("id",$code);
        $this->db->update("country",$data);
      }
      
       function CountryDelete($code)
      {
	
	    $this->db->where("id",$code);
	    $this->db->delete("country");
      }
	 
	 
    
   
}