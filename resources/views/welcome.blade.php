
@extends('layouts.frontend_master')
@section('title','Home Page')
@section('main_content')
<div class="row">
    <div class="col-md-3">

        <a href="{{route('set-session')}}">Set-Session</a><br /><br />
        <a href="{{route('get-session')}}">Get-Session</a><br /><br />
        <a href="{{route('forget-session')}}">Forget-Session</a><br /><br />
        <a href="{{route('check-session')}}">Check-Session</a><br /><br />
        <a href="{{route('delete-session')}}">Delete-Session</a><br /><br />
        <a href="{{route('all-session')}}">All-Session[If no found session first click Set-Session]</a><br /><br />
        <a href="{{route('flash-message')}}">Temporary message set</a><br /><br />
        <a href="{{route('show-message')}}">View temporary message</a>
    

        
  
              
 Tutorials
            
          
          <ul>
            <li><a class="dropdown-item" href="https://www.youtube.com/c/RuhulAcademy/playlists"target="_blank">Ruhul Academy</a></li>
            
            
            <li><a class="dropdown-item" href="https://www.youtube.com/c/CreativeITInstitute/videos"target="_blank">Creative IT Institute</a></li>
            
        
            <li><a class="dropdown-item" href="https://www.youtube.com/c/NirobHasan/playlists"target="_blank">Nirob Hasan</a></li>
            
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="https://www.youtube.com/c/ManirujjamanAkashChanel/playlists"target="_blank">Monirujjaman</a></li>
              
              
               <li><a class="dropdown-item" href="https://www.youtube.com/playlist?list=PLjZmR8YqVGMfe7zeG7ul3hNjpuZH2s88h"target="_blank">Al Mamun Sarkar(Laravel)</a></li>
               
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="https://www.artofcse.com/"target="_blank">Laravel Source Code</a></li>
              
        
              <li><a class="dropdown-item" href="https://www.youtube.com/c/EduFlyz/playlists"target="_blank">Edu Flyz</a></li>
        
            
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCtWM-vtkrb2bpEF9J1O1fbQ"target="_blank">Graphics Design</a></li>
            

              <li><a class="dropdown-item" href="https://btechgeeks.com/"target="_blank">BTechGGeeks</a></li>
              
        
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCzmI_aDsHbBXPZzabrsM7sA/playlists"target="_blank">Training With Live Project</a></li>
            
            
            <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=5dIHUljeb_s&list=PL1AXcfXimFRF3qKaLqp_N6jSHKqHjgKDI&ab_channel=Klassroom"target="_blank">Laravel Tutorial</a></li>
           
           
            <li><a class="dropdown-item" href="https://www.youtube.com/user/learn24bd/playlists"target="_blank">Laravel LearnBD24</a></li>
           
           
            
            <li><a class="dropdown-item" href="http://www.outsourcinghelp.net/classnotes/"target="_blank">Free Outsourcing course</a></li>
            

            <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=iLAKRRL285k&list=PLJ-3-UkU_it-1zhisUmSicBi4i_fvn3uL&ab_channel=TalhaTraining"target="_blank">Talha training laravel</a></li>
            
            
            
           
           
            <li><a class="dropdown-item" href="https://www.canva.com/design/DAECwzwq0N0/8RQ-2nTwXiD0OxlJJ2naZg/edit?category=tACZCnmCPGY"target="_blank">Canva</a></li>
           
          </ul>

      </div>







 <div class="col-md-3">
 Social    
          <ul>     
                <li><a class="dropdown-item" href="https://www.facebook.com/"target="_blank">Facebook</a></li>
                
              
          <li><a class="dropdown-item" href="https://twitter.com/"target="_blank">Twitter</a></li>
          
            
              <li><a class="dropdown-item" href="https://www.instagram.com/"target="_blank">Instragram</a></li>
              
               
                  <li><a class="dropdown-item" href="https://www.youtube.com/"target="_blank">Youtube</a></li>
                  
             
            <li><a class="dropdown-item" href="https://www.youtube.com/c/HujurTv24/playlists"target="_blank">Hujur TV 24</a></li>
            
          
            <li><a class="dropdown-item" href="https://www.youtube.com/c/ElamSeba/videos"target="_blank">Elam Seba</a></li>
           
        
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCzl54RQebnO4Ymfahi_eadQ/playlists"target="_blank">Daily Recitation</a></li>
            
           
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCqbaw9b7BffjNUh6uPd7uQw/featured"target="_blank">Torikot TV</a></li>
          
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCcm0MZDyUkiJKbYBP2t2FdA/videos"target="_blank">Islamic Story</a></li>
            
            
               
            <li><a class="dropdown-item" href="https://www.instantstreetview.com/@24.695299,88.162665,260.93h,-28.48p,0.12z,CtJKuvICAd8C4fdrPvEjtQ"target="_blank">Street View</a></li>
            
            
                  
            <li><a class="dropdown-item" href="https://www.youtube.com/c/TravelShooters/videos"target="_blank">Travel Shooters</a></li>
            
            
            
        
          </ul>
          
       
              
 Myself
            
          
          <ul>
            <li><a class="dropdown-item" href="https://karimfiroz.github.io/firoz/"target="_blank">My Web</a></li>
            
        
            <li><a class="dropdown-item" href="http://firozlearninghome.blogspot.com/"target="_blank">My Blog</a></li>
            
        
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCbFXTWcyecmV4_CT3AcsDPw/playlists"target="_blank">My Youtube Site</a></li>
            
    
            <li><a class="dropdown-item" href="https://www.youtube.com/c/HazratShaykhDrMushtaqueAhmed/videos"target="_blank">Dr.Mostaque Ahmed</a></li>
            
            <li><a class="dropdown-item" href="https://www.facebook.com/Minafarahusa/"target="_blank">Mina Farah</a></li>
            
    
            <li><a class="dropdown-item" href="https://www.youtube.com/sonyaath/playlists"target="_blank">Crime Petrol(India)</a></li>
            

            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCLbdDFdhsQNeCzrmzHnpIYQ"target="_blank">Crime Petrol(BD)</a></li>
            
    
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCqk3_x2FUhPHXU51wiR1IsA"target="_blank">Movie(BD)</a></li>
            
        
            <li><a class="dropdown-item" href="https://www.youtube.com/c/watchHitsHD/playlists"target="_blank">Movie(India)</a></li>
            
            
        
            <li><a class="dropdown-item" href="http://ntvconnect.ntvbd.com/"target="_blank">NTV Connect</a></li>
            
            <li><a class="dropdown-item" href="https://firozshah.github.io/school/"target="_blank">School Web</a></li>
            
            <li><a class="dropdown-item" href="https://firozshahschool.blogspot.com/"target="_blank">School Blog</a></li>
            

            <li><a class="dropdown-item" href="https://onlinecalculator.guru/maths-formulas/"target="_blank">Math Formula</a></li>
            
    
            <li><a class="dropdown-item" href="https://www.ncertbooks.guru/"target="_blank">BooKs</a></li>
            

            <li><a class="dropdown-item" href="https://www.ncertbooks.guru/cbse-ncert-solutions-pdf/"target="_blank">Solutions</a></li>
            
            
        
            <li><a class="dropdown-item" href="https://www.youtube.com/c/iTuberlogy/videos"target="_blank">BD Darpon</a></li>
        </ul>
      

 
      </div>











         <div class="col-md-3"> 
  
             Education
        
          <ul>
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UC0LC4WOqjRvf-LKk5sgCBug/playlists"target="_blank">Al Quran</a></li>
            

            <li><a class="dropdown-item" href="http://ihadis.com/"target="_blank">Hadis</a></li>
            

            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCYCQNElr-0y_0Y8g3sJfEzA"target="_blank">Tafsir Mahfil</a></li>
            

            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UC5WnwbpCHH25pWXr6kRUT2Q/playlists"target="_blank">English Speeking Course</a></li>
            
    
            <li><a class="dropdown-item" href="https://www.youtube.com/c/FahadHossainEdutubebd/videos"target="_blank">Amader School</a></li>
            
        
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCbwkFZgFll5NyoL0hcdrHPA"target="_blank">Mahadi Academy</a></li>
            

            <li><a class="dropdown-item" href="https://www.youtube.com/c/MottasinPahloviBUETian/playlists"target="_blank">BUETian</a></li>
            

            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UC5uRU31CY02ncfREI758orw"target="_blank">Technique Easy Education</a></li>
            
        
            <li><a class="dropdown-item" href="https://eduhlpline.com/"target="_blank">Edu Help Line</a></li>
            

            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCGjbt_d9NlH18MNMrC82qhw"target="_blank">Education Environment</a></li>
          </ul> 
 News
            
          
          <ul>
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCd0sgSradUWXA02jLRDPOLw"target="_blank">Awaz-1</a></li>
            
            
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCuhrp5_cAfLtide2aBToQuw"target="_blank">BD Views</a></li>
    
            
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCmV8TCEMfnJpSC0tavFN_nQ"target="_blank">Open The Eyes</a></li>
            

            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCP-G6dMvKUYpJjRh88-fQIQ/videos"target="_blank">World News 24</a></li>
                    
            <li><a class="dropdown-item" href="https://www.w3newspapers.com/bangladesh/"target="_blank">Newspapers</a></li>
            
        
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCFhJrgJkASY7AX2vqRb3e2w"target="_blank">Tech World</a></li>
            
        
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCQXvFp1Cv_oMb2LJ5eQmbdA"target="_blank">BAC World News</a></li>
    
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UC-N4b49LAlPDBZ5A5-2Ci8A"target="_blank">Jahan News BD</a></li>

            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCbf0XHULBkTfv2hBjaaDw9Q"target="_blank">World News 18</a></li>
            

            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCB84-jL7GDD2LZ9U1WH1xAg"target="_blank">RBD News</a></li>
            
    
            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCM-aLP2hGV_riMv1rFpAU5A"target="_blank">Bangla News Channel</a></li>
            
    
            <li><a class="dropdown-item" href="https://www.activenews24.com/"target="_blank">Active News</a></li>
            
        
            <li><a class="dropdown-item" href="https://www.desifree.tv/somoy-news/"target="_blank">Somoy TV</a></li>
           
           

            <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCpYnRIF2FmVXFjxNFeuv1Og/videos"target="_blank">News Exposure</a></li>
           
           
           
           
          </ul>
    

    </div>



         <div class="col-md-3">

TV
          
          <ul>
           
           <li><a class="dropdown-item" href="http://www.jagobd.com/ntveurope"target="_blank">All Bangla TV</a></li>
           
        
            <li><a class="dropdown-item" href="https://bengali.abplive.com/live-tv"target="_blank">ABP Ananda</a></li>
            
    
            <li><a class="dropdown-item" href="https://www.desifree.tv/news18-bangla/"target="_blank">News 18</a></li>
            
    
            <li><a class="dropdown-item" href="https://www.youtube.com/watch?v
            =lGCiQrfR00U&ab_channel=SOMOYTV"target="_blank">Youtube</a></li>
            
            
    
            <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=xwXvTkr794s&ab_channel=Zee24Ghanta"target="_blank">Gee 24 Ghanta</a></li>
            
            
            
            <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=jR52YpO3h_w&ab_channel=TV9Bangla"target="_blank">TV9 Bangla</a></li>
            
    
            <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=ZbqFXifTAUw&ab_channel=RepublicBangla"target="_blank">Republic Bangla</a></li>
        

            <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=Dz_lZxgIZu8&ab_channel=DBCNEWS"_blank">DBC News</a></li>
            
            
            
    
            <li><a class="dropdown-item" href="https://www.desifree.tv/ntv/"target="_blank">NTV</a></li>

            <li><a class="dropdown-item" href="http://www.zengatv.com/live/d5ef7715-3d77-4384-90fa-d46b353d035c.html"target="_blank">Zenga TV</a></li>
        
            <li><a class="dropdown-item" href="https://www.desifree.tv/pogo-tv/"target="_blank">Pogo TV</a></li>
            
            
          </ul>
      
Audio
          
          <ul>
     
        
            <li><a class="dropdown-item" href="https://www.youtube.com/c/BanglaNewsTodayBangla/videos"target="_blank">Bangla News Today</a></li>
            
    
            <li><a class="dropdown-item" href="https://radio.net.bd/"target="_blank">Bangla Radio</a></li>
            
        
            <li><a class="dropdown-item" href="https://thedailycampus.com/"target="_blank">The Daily Campas</a></li> 
            
            

            <li><a class="dropdown-item" href="https://almodina.com/"target="_blank">Al Modina</a></li>
            
            <li><a class="dropdown-item" href="https://onlinebanglaradio.com/bangla-audio-story/hello-8920-abc-radio/"target="_blank">Hello 8920</a></li>
          </ul>


            
         </div>
</div>

     



@endsection