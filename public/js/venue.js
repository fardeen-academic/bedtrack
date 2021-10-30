function choosevenue(listindex)
            {
                document.getElementById("district").length = 0;
                switch (listindex)
                {
                    case "Barisal" :
                        document.getElementById("district").options[0]=new Option("Choose...","");
                        document.getElementById("district").options[1]=new Option("Barguna","Barguna");
                        document.getElementById("district").options[2]=new Option("Barisal","Barisal");
                        document.getElementById("district").options[3]=new Option("Bhola","Bhola");
                        document.getElementById("district").options[4]=new Option("Jhalokati","Jhalokati");
                        document.getElementById("district").options[5]=new Option("Patuakhali","Patuakhali");
                        document.getElementById("district").options[6]=new Option("Pirojpur","Pirojpur");
                        
                        document.getElementById("venue").options[0]=new Option("Choose...","");
                        document.getElementById("venue").options[1]=new Option("Sher-e-Bangla Medical College","bar1");
                        document.getElementById("venue").options[2]=new Option("Patuakhali Medical College","bar2");
                        
                        break;
                    
                    case "Chittagong" :
                        document.getElementById("district").options[0]=new Option("Choose...","");
                        document.getElementById("district").options[1]=new Option("Bandarban","Bandarban");
                        document.getElementById("district").options[2]=new Option("Brahmanbaria","Brahmanbaria");
                        document.getElementById("district").options[3]=new Option("Chandpur","Chandpur");
                        document.getElementById("district").options[4]=new Option("Chittagong","Chittagong");
                        document.getElementById("district").options[5]=new Option("Comilla","Comilla");
                        document.getElementById("district").options[6]=new Option("Cox's Bazar","Cox's Bazar");
                        document.getElementById("district").options[7]=new Option("Feni","Feni");
                        document.getElementById("district").options[8]=new Option("Khagrachari","Khagrachari");
                        document.getElementById("district").options[9]=new Option("Lakshmipur","Lakshmipur");
                        document.getElementById("district").options[10]=new Option("Noakhali","Noakhali");
                        document.getElementById("district").options[11]=new Option("Rangamati","Rangamati");
                        
                        document.getElementById("venue").options[0]=new Option("Choose...","");
                        document.getElementById("venue").options[1]=new Option("Chattogram Medical College","ctg1");
                        document.getElementById("venue").options[2]=new Option("Cumilla Medical College","ctg2");
                        document.getElementById("venue").options[3]=new Option("Abdul Malek Ukil Medical College","ctg3");
                        document.getElementById("venue").options[4]=new Option("Cox's Bazar Medical College","ctg4");
                        document.getElementById("venue").options[5]=new Option("Rangamati Medical College","ctg5");
                        document.getElementById("venue").options[6]=new Option("Chandpur Medical College","ctg6");
                        
                        break;

                    case "Dhaka" :
                        document.getElementById("district").options[0]=new Option("Choose...","");
                        document.getElementById("district").options[1]=new Option("Dhaka","Dhaka");
                        document.getElementById("district").options[2]=new Option("Faridpur","Faridpur");
                        document.getElementById("district").options[3]=new Option("Gazipur","Gazipur");
                        document.getElementById("district").options[4]=new Option("Gopalganj","Gopalganj");
                        document.getElementById("district").options[5]=new Option("Kishoreganj","Kishoreganj");
                        document.getElementById("district").options[6]=new Option("Madaripur","Madaripur");
                        document.getElementById("district").options[7]=new Option("Manikganj","Manikganj");
                        document.getElementById("district").options[8]=new Option("Munshiganj","Munshiganj");
                        document.getElementById("district").options[9]=new Option("Narayanganj","Narayanganj");
                        document.getElementById("district").options[10]=new Option("Narshingdi","Narshingdi");
                        document.getElementById("district").options[11]=new Option("Rajbari","Rajbari");
                        document.getElementById("district").options[12]=new Option("Shariatpur","Shariatpur");
                        document.getElementById("district").options[13]=new Option("Tangail","Tangail");
                        
                        document.getElementById("venue").options[0]=new Option("Choose...","");
                        document.getElementById("venue").options[1]=new Option("Dhaka Medical College","dhk1");
                        document.getElementById("venue").options[2]=new Option("Sir Salimullah Medical College","dhk2");
                        document.getElementById("venue").options[3]=new Option("Shaheed Suhrawardy Medical College","dhk3");
                        document.getElementById("venue").options[4]=new Option("Bangabandhu Sheikh Mujib Medical College","dhk4");
                        document.getElementById("venue").options[5]=new Option("Shahid Syed Nazrul Islam Medical College","dhk5");
                        document.getElementById("venue").options[6]=new Option("Sheikh Sayera Khatun Medical College","dhk6");
                        document.getElementById("venue").options[7]=new Option("Shaheed Tajuddin Ahmad Medical College","dhk7");
                        document.getElementById("venue").options[8]=new Option("Sheikh Hasina Medical College","dhk8");
                        document.getElementById("venue").options[9]=new Option("Colonel Malek Medical College","dhk9");
                        document.getElementById("venue").options[10]=new Option("Mugda Medical College","dhk10");
                        
                        break;

                    case "Khulna" :
                        document.getElementById("district").options[0]=new Option("Choose...","");
                        document.getElementById("district").options[1]=new Option("Bagerhat","Bagerhat");
                        document.getElementById("district").options[2]=new Option("Chuadanga","Chuadanga");
                        document.getElementById("district").options[3]=new Option("Jessore","Jessore");
                        document.getElementById("district").options[4]=new Option("Jhenaida","Jhenaida");
                        document.getElementById("district").options[5]=new Option("Khulna","Khulna");
                        document.getElementById("district").options[6]=new Option("Kushtia","Kushtia");
                        document.getElementById("district").options[7]=new Option("Magura","Magura");
                        document.getElementById("district").options[8]=new Option("Meherpur","Meherpur");
                        document.getElementById("district").options[9]=new Option("Narail","Narail");
                        document.getElementById("district").options[10]=new Option("Satkhira","Satkhira");
                        
                        document.getElementById("venue").options[0]=new Option("Choose...","");
                        document.getElementById("venue").options[1]=new Option("Khulna Medical College","khu1");
                        document.getElementById("venue").options[2]=new Option("Jashore Medical College","khu2");
                        document.getElementById("venue").options[3]=new Option("Satkhira Medical College","khu3");
                        document.getElementById("venue").options[4]=new Option("Kushtia Medical College","khu4");
                        document.getElementById("venue").options[5]=new Option("Magura Medical College","khu5");
                        
                        
                        break;

                    case "Mymensingh":
                        document.getElementById("district").options[0]=new Option("Choose...","");
                        document.getElementById("district").options[1]=new Option("Jamalpur","Jamalpur");
                        document.getElementById("district").options[2]=new Option("Mymensingh","Mymensingh");
                        document.getElementById("district").options[3]=new Option("Netrokona","Netrokona");
                        document.getElementById("district").options[4]=new Option("Sherpur","Sherpur");

                        document.getElementById("venue").options[0]=new Option("Choose...","");
                        document.getElementById("venue").options[1]=new Option("Mymensingh Medical College","mym1");
                        document.getElementById("venue").options[2]=new Option("Sheikh Hasina Medical College","mym2");
                        document.getElementById("venue").options[3]=new Option("Netrokona Medical College","mym3");
                        
                        break;

                    case "Rajshahi":
                        document.getElementById("district").options[0]=new Option("Choose...","");
                        document.getElementById("district").options[1]=new Option("Bogra","Bogra");
                        document.getElementById("district").options[2]=new Option("Jaipurhat","Jaipurhat");
                        document.getElementById("district").options[3]=new Option("Naogaon","Naogaon");
                        document.getElementById("district").options[4]=new Option("Natore","Natore");
                        document.getElementById("district").options[5]=new Option("Nawabganj","Nawabganj");
                        document.getElementById("district").options[6]=new Option("Pabna","Pabna");
                        document.getElementById("district").options[7]=new Option("Rajshahi","Rajshahi");
                        document.getElementById("district").options[8]=new Option("Sirajganj","Sirajganj");
                        
                        document.getElementById("venue").options[0]=new Option("Choose...","");
                        document.getElementById("venue").options[1]=new Option("Rajshahi Medical College","raj1");
                        document.getElementById("venue").options[2]=new Option("Shaheed Ziaur Rahman Medical College","raj2");
                        document.getElementById("venue").options[3]=new Option("Pabna Medical College","raj3");
                        document.getElementById("venue").options[4]=new Option("Shaheed M. Monsur Ali Medical College","raj4");
                        document.getElementById("venue").options[5]=new Option("Naogaon Medical College","raj5");
                        
                        break;

                    case "Rangpur":
                        document.getElementById("district").options[0]=new Option("Choose...","");
                        document.getElementById("district").options[1]=new Option("Dinajpur","Dinajpur");
                        document.getElementById("district").options[2]=new Option("Gaibandha","Gaibandha");
                        document.getElementById("district").options[3]=new Option("Kurigram","Kurigram");
                        document.getElementById("district").options[4]=new Option("Lalmonirhat","Lalmonirhat");
                        document.getElementById("district").options[5]=new Option("Nilphamari","Nilphamari");
                        document.getElementById("district").options[6]=new Option("Panchagarh","Panchagarh");
                        document.getElementById("district").options[7]=new Option("Rangpur","Rangpur");
                        document.getElementById("district").options[8]=new Option("Thakurgaon","Thakurgaon");
                        
                        document.getElementById("venue").options[0]=new Option("Choose...","");
                        document.getElementById("venue").options[1]=new Option("Rangpur Medical College","ran1");
                        document.getElementById("venue").options[2]=new Option("M Abdur Rahim Medical College","ran2");
                        document.getElementById("venue").options[3]=new Option("Nilphamari Medical College","ran3");

                        break;
                        
                    case "Sylhet":
                        document.getElementById("district").options[0]=new Option("Choose...","");
                        document.getElementById("district").options[1]=new Option("Habiganj","Habiganj");
                        document.getElementById("district").options[2]=new Option("Moulovibazar","Moulovibazar");
                        document.getElementById("district").options[3]=new Option("Sunamganj","Sunamganj");
                        document.getElementById("district").options[4]=new Option("Sylhet","Sylhet");
                        
                        document.getElementById("venue").options[0]=new Option("Choose...","");
                        document.getElementById("venue").options[1]=new Option("Sylhet MAG Osmani Medical College","syl1");
                        document.getElementById("venue").options[2]=new Option("Sheikh Hasina Medical College","syl2");
                        document.getElementById("venue").options[3]=new Option("Bangabandhu Medical College","syl3");
                        
                        
                        break;
                }
                return true;
            }

