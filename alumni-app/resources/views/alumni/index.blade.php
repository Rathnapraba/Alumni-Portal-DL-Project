
@extends('layout')

@section('content')
    <style>
        .alumni-container {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: left;
            margin: 20px;
        }
        

        .alumni-photo {
            border: 2px solid #333;
            border-radius: 10px;
            width: 300px;
            height: 300px;
            margin-right: 20px;
        }

        .alumni-details {
            max-width: 600px;
        }

        .alumni-details h2 {
            margin-bottom: 10px; 
        }

        .alumni-details p {
            line-height: 1.6; 
            margin-bottom: 15px; 
        }

        .alumni-table {
            width: 70%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .alumni-table th, .alumni-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        .alumni-table th {
            background-color: #f2f2f2;
        }
        .alumni-container {
            margin: 20px;
        }
    </style>

    <div class="alumni-container">
        <img src="https://www.kgkite.ac.in/wp-content/uploads/2023/06/Principal-KiTE-3.jpeg" alt="photo" class="alumni-photo">
        <div class="alumni-details">
            <h2>Dr.S. Suresh Kumar M.E., Ph.D., C.ENG.</h2>
            <h4> Principal </h4>
            <p>
                Dr. S. Suresh Kumar – Accomplished, Professor, Ph.D., C. Eng., MIEEE., MIET., MIETE, MIE., MIAENG, MSESI, MBMESI, MAEMP, MSEEM, MAES., MISCA., MACCS., MSSI., MCSI., MISTE., with over 31 years of Experience in Education, Research and Development in a range of areas such as Power Electronics & Drives, Power Quality, Renewable Energy (RE) Technologies, Signal & Image Processing, Embedded Systems, and IoT.
            </p>
            <p>
                Served as a Faculty in the Department of Electrical & Electronics Engineering, PSG College of Technology (1993-2007), Coimbatore, TN, INDIA, as Director, School of Electrical Sciences, Karunya University (2007-11), Coimbatore, TN, INDIA, as Director – Research at Dr. NGP Institute of Technology (2011 – 2018), Coimbatore, TN, INDIA as Vice Principal in KGiSL Institute of Technology (2019 Onwards), Coimbatore, TN, INDIA, and as Principal from 2023 onwards. Also, he has administrated CFR / NBA / NAAC / IQAC / NIRF / IIPC / AISHE / AICTE & AU Affiliation & Approval / CII / ISO / EDC / Higher Education and various other Administrative Committees as Convenor and Coordinator for the smooth functioning of the Institutions.
            </p> 
           
            <h2>Distinguished Alumni</h2>

    </div>
    </div>
        
    <div class="alumni-container">
    

        <table class="alumni-table">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>Batch</th>
                    <th>Department</th>
                    <th>Designation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Subhiksha C R</td>
                    <td>2012 - 16</td>
                    <td>CSE</td>
                    <td>The Skanda Corp</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Suveksha A</td>
                    <td>2019 - 23</td>
                    <td>CSE</td>
                    <td>Samsung - Software Development Engineer</td>
                </tr>

                <tr>
            <td>3</td>
            <td>Sathasivam T</td>
            <td>2019 - 23</td>
            <td>CSE</td>
            <td>Kovai.co - Associate Software Engineer</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Deepak Chakravarthy</td>
            <td>2018 - 22</td>
            <td>CSE</td>
            <td>Kovai.co - Junior Software Engineer</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Saravanan G</td>
            <td>2018 - 22</td>
            <td>CSE</td>
            <td>Raja Software Labs Pvt. Ltd.</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Santhosh M</td>
            <td>2017 - 21</td>
            <td>CSE</td>
            <td>QAD India Pvt. Ltd</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Hemalatha K</td>
            <td>2018 - 22</td>
            <td>CSE</td>
            <td>CTS - Programmer Analyst</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Solomon Raj</td>
            <td>2017 - 21</td>
            <td>CSE</td>
            <td>Presidio - Cloud Engineer Trainee</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Rahul Prabhu</td>
            <td>2017 - 21</td>
            <td>CSE</td>
            <td>Presidio - Cloud Engineer Trainee</td>
        </tr>
        <tr>
            <td>10</td>
            <td>Kishore Raj R R</td>
            <td>2016 - 20</td>
            <td>CSE</td>
            <td>Coding Mart - Product Engineer Trainee</td>
        </tr>
                
        <tr>
        <td>11</td>
        <td>Kishore Raj R R</td>
        <td>2016 - 20</td>
        <td>CSE</td>
        <td>Coding Mart - Product Engineer Trainee</td>
    </tr>
    <tr>
        <td>12</td>
        <td>Meenakshi H</td>
        <td>2016 - 20</td>
        <td>CSE</td>
        <td>Capgemini – Analyst</td>
    </tr>
    <tr>
        <td>13</td>
        <td>Prema S</td>
        <td>2015 - 19</td>
        <td>CSE</td>
        <td>Valtech India Private Limited - Associate Software Engineer</td>
    </tr>
    <tr>
        <td>14</td>
        <td>Krishna Divya</td>
        <td>2015 - 19</td>
        <td>CSE</td>
        <td>TCS - Assistant System Engineer- Trainee</td>
    </tr>
    <tr>
        <td>15</td>
        <td>Priyanka R</td>
        <td>2014 - 18</td>
        <td>CSE</td>
        <td>FACE - Associate</td>
    </tr>
    <tr>
        <td>16</td>
        <td>Aravindhan S</td>
        <td>2014 - 18</td>
        <td>CSE</td>
        <td>Ugam Solutions - Associate Analyst- Research Operation</td>
    </tr>
    <tr>
        <td>17</td>
        <td>Poornakumar S B</td>
        <td>2011 - 15</td>
        <td>MECH</td>
        <td>Proprietor, Greystone Industries, Kovilpalayam Coimbatore</td>
    </tr>
    <tr>
        <td>18</td>
        <td>Arun Prakash N</td>
        <td>2011 - 15</td>
        <td>MECH</td>
        <td>PCE Technology, Foxconn</td>
    </tr>
    <tr>
        <td>19</td>
        <td>Madhu sudan G</td>
        <td>2012 - 16</td>
        <td>MECH</td>
        <td>Maxbyte technologies</td>
    </tr>
    <tr>
        <td>20</td>
        <td>Gowtham K</td>
        <td>2012 - 16</td>
        <td>MECH</td>
        <td>FujiSakura Technologies Pvt.Ltd , Japan</td>
    </tr>
    <tr>
        <td>21</td>
        <td>Sakthi.S</td>
        <td>2013-17</td>
        <td>MECH</td>
        <td>Proprietor, Techzo Impex Pvt Ltd</td>
    </tr>
    <tr>
        <td>22</td>
        <td>Mohammed Sikkander.K</td>
        <td>2014-18</td>
        <td>MECH</td>
        <td>Proprietor, KMS Engineering Works</td>
    </tr>
    <tr>
        <td>23</td>
        <td>Pradeeph V</td>
        <td>2014-18</td>
        <td>MECH</td>
        <td>Proprietor, Gurudeeph Industries, Coimbatore</td>
    </tr>
    <tr>
        <td>24</td>
        <td>Mohamed Faizal</td>
        <td>2015-19</td>
        <td>MECH</td>
        <td>Manager – operations and Sales, Limitless360, Coimbatore</td>
    </tr>
    <tr>
        <td>25</td>
        <td>Ranjith Kumar.R</td>
        <td>2015-19</td>
        <td>MECH</td>
        <td>Implementation Manager, Vestas R & D Technology Pvt. Ltd.</td>
    </tr>
    <tr>
        <td>26</td>
        <td>Vignesh A K</td>
        <td>2015-19</td>
        <td>MECH</td>
        <td>Proprietor, Aishwarya Polymers, Karur</td>
    </tr>
    <tr>
        <td>27</td>
        <td>Sathiya Priyan S</td>
        <td>2016-20</td>
        <td>MECH</td>
        <td>Andriod Developer, Reliance JIO, Bangalore</td>
    </tr>
    <tr>
        <td>28</td>
        <td>Mervin Anand Antony F.B</td>
        <td>2016-20</td>
        <td>MECH</td>
        <td>Project Engineer, JETAVI Engineering Pvt Ltd</td>
    </tr>
    <tr>
        <td>29</td>
        <td>Solomon C</td>
        <td>2017-21</td>
        <td>MECH</td>
        <td>Design Engineer, Segula Technologies</td>
    </tr>
    <tr>
        <td>30</td>
        <td>Santhosh M</td>
        <td>2017-21</td>
        <td>MECH</td>
        <td>Piping Detailer, Abu Dhabi</td>
    </tr>
            </tbody>
        </table>
    </div>
   
@endsection
