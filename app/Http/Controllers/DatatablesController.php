<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Yajra\Datatables\Datatables;

class DatatablesController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('datatables.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
//Array ( [nx-9194253658221461238617203] => CouchbaseMetaDoc Object ( [error] => [value] => Array ( [actionkey] => ca [authmx] => 919425365822 [cxd] => Array ( [0] => Array ( [0] => -TaHU8673A8URxdZcimtWOz [1] => -rIhj5i6ZqJ_ZxrZR3At-s9 [2] => 919425365822 ) ) [dxid] => Array ( [0] => -BGwW9UtFGEQQgpV4qPPeLY ) [dxname] => Latest Group [eptime] => 1461238617204 [mxname] => New Name [nxdescription] => Med Sharma archived in Latest Group phonebook by New Name [nxtimestamp] => 1461238617203 [owner] => 919425365822 [process] => Array ( [0] => Android [1] => 3.3.03 [2] => 19 [3] => HM NOTE 1LTE [4] => 71a6590a4ba62b68 [5] => createNotification [6] => ca ) [state] => pending [ttl] => 1477049817202 [type] => nx [udid] => 865980023837823 ) [flags] => 0 [cas] => Resource id #7 ) [nx-9194253658221461238594898] => CouchbaseMetaDoc Object ( [error] => [value] => Array ( [actionkey] => ca [authmx] => 919425365822 [cxd] => Array ( [0] => Array ( [0] => -fIaLWv6FgPu-JAYMnF8ARU [1] => -1inA-aGQgjR2pypDk4pkyO [2] => ) [1] => Array ( [0] => -Uag_3AfSF0lG7hIBXKQHMV [1] => -VMurdmCs4BUCu3dlx5vu5h [2] => ) [2] => Array ( [0] => -1uvL8tdcX10MJ69xpj4fOb [1] => -ymH_1L1IRI6w8LM8jS_Dl1 [2] => ) [3] => Array ( [0] => -RxyrZE8BqMMjhMG9r6hZva [1] => -xTO9l4H44zLYnrHls5LPrp [2] => ) [4] => Array ( [0] => -tH0hDOY9Ik3NZoOWHLUvIE [1] => -W9Ch3GEetZnQmZq2Ch13Lm [2] => ) [5] => Array ( [0] => -fRNAhadNBWmljSlWQ1zH-j [1] => -FIufHexKssyl3zCo2Gvkzm [2] => ) [6] => Array ( [0] => -t3B9xLWTSGKKSnHCutc0oB [1] => -MCLfKELfhHeo5f6Ke3RTVm [2] => ) [7] => Array ( [0] => -1_nFBaaSHq5oSiqSVlTYsv [1] => -JnR0APV7BAzsfrR8N4phrv [2] => ) [8] => Array ( [0] => -QfiDbNrRwQWRl3VXTbLy4R [1] => -sbjz8667c9R-gauujjvEPB [2] => ) [9] => Array ( [0] => -ueU5Vazwp-v3IOiGNEhztH [1] => -BWkkLz2aUNt1ZGg0Gphy9B [2] => ) [10] => Array ( [0] => -qrRqiLHDrHQzZXxG22Iouh [1] => --uSB6MsAbvpNUsRXWDR8i7 [2] => ) [11] => Array ( [0] => -oyH6Y7kDoIU8PUxY6nlijF [1] => -Ze5hBw9vsxjjemLhBwSOQ1 [2] => ) [12] => Array ( [0] => -TEmzk_9kIwddllThlYFOp2 [1] => -C-proEZMSfE2I-z-TXMfZn [2] => ) [13] => Array ( [0] => -PwLnieAnP0darpWn4R7COU [1] => -mI2CT3C5GehaD5ktwBoHGY [2] => ) [14] => Array ( [0] => -vH2to29EYrVYx9KWkzoSax [1] => -P6znyUpiePcSDHY3DkeKMX [2] => ) [15] => Array ( [0] => -12HBFks7b30Dh6M2ag8JQb [1] => -pf997oEEdl6jPJij6VY1Z9 [2] => ) [16] => Array ( [0] => -CjC0aft_DOhvcJZu3Q_Czq [1] => -0x-a70Q5j16DuJTMxShfmL [2] => ) [17] => Array ( [0] => -IrIqgBunYz3GapKROBkkZ4 [1] => -syjXRCXZ0Fg0Jm2ICmruH4 [2] => ) [18] => Array ( [0] => -KoifXBt7w6NzY8RQuOXMzW [1] => -HbI_M3npys3h_pFru_z52_ [2] => ) [19] => Array ( [0] => -no1aoWDGduvya3GUjuSp04 [1] => -0Sa-EVwevAzJIGlUjGwQOW [2] => ) [20] => Array ( [0] => -SmMUVx6WpCBvs42vISa2M4 [1] => -XTKTD7b-SSpyXWgOUieK81 [2] => ) ) [dxid] => Array ( [0] => -BGwW9UtFGEQQgpV4qPPeLY ) [dxname] => Latest Group [eptime] => 1461238594904 [mxname] => New Name [nxdescription] => 21 contacts archived in Latest Group phonebook by New Name [nxtimestamp] => 1461238594898 [owner] => 919425365822 [process] => Array ( [0] => Android [1] => 3.3.03 [2] => 19 [3] => HM NOTE 1LTE [4] => 71a6590a4ba62b68 [5] => createNotification [6] => ca ) [state] => pending [ttl] => 1477049794898 [type] => nx [udid] => 865980023837823 ) [flags] => 0 [cas] => Resource id #8 ) [nx-9196325874121461238407] => CouchbaseMetaDoc Object ( [error] => [value] => Array ( [actionkey] => dxc [authmx] => 919632587412 [dxid] => Array ( [0] => -BGwW9UtFGEQQgpV4qPPeLY ) [eptime] => 1461238407 [isundo] => 0 [mxname] => Newejdjd Profile ndk [nxdescription] => New phonebook Latest Group created by Newejdjd Profile ndk [nxtimestamp] => 1461238407 [owner] => 919632587412 [process] => Array ( [0] => iOS [1] => 61 [2] => 9.3.1 [3] => iPhone [4] => B93324759C7C423B8B572D9ED1A1F0F4 [5] => CreatePhoneBook.createNewPhonebook [6] => nxc ) [state] => pending [ttl] => 1.47705e+09 [type] => nx [udid] => B9332475-9C7C-423B-8B57-2D9ED1A1F0F4 ) [flags] => 0 [cas] => Resource id #9 ) [nx-9196325874121461238431] => CouchbaseMetaDoc Object ( [error] => [value] => Array ( [actionkey] => ae [authmx] => 919632587412 [cxd] => Array ( [0] => Array ( [0] => -CjC0aft_DOhvcJZu3Q_Czq [1] => -0x-a70Q5j16DuJTMxShfmL [2] => ) [1] => Array ( [0] => -SmMUVx6WpCBvs42vISa2M4 [1] => -XTKTD7b-SSpyXWgOUieK81 [2] => ) [2] => Array ( [0] => -ueU5Vazwp-v3IOiGNEhztH [1] => -BWkkLz2aUNt1ZGg0Gphy9B [2] => ) [3] => Array ( [0] => -TEmzk_9kIwddllThlYFOp2 [1] => -C-proEZMSfE2I-z-TXMfZn [2] => ) [4] => Array ( [0] => -t3B9xLWTSGKKSnHCutc0oB [1] => -MCLfKELfhHeo5f6Ke3RTVm [2] => ) [5] => Array ( [0] => -RxyrZE8BqMMjhMG9r6hZva [1] => -xTO9l4H44zLYnrHls5LPrp [2] => ) [6] => Array ( [0] => -1_nFBaaSHq5oSiqSVlTYsv [1] => -JnR0APV7BAzsfrR8N4phrv [2] => ) [7] => Array ( [0] => -oyH6Y7kDoIU8PUxY6nlijF [1] => -Ze5hBw9vsxjjemLhBwSOQ1 [2] => ) [8] => Array ( [0] => -no1aoWDGduvya3GUjuSp04 [1] => -0Sa-EVwevAzJIGlUjGwQOW [2] => ) [9] => Array ( [0] => -tH0hDOY9Ik3NZoOWHLUvIE [1] => -W9Ch3GEetZnQmZq2Ch13Lm [2] => ) [10] => Array ( [0] => -fIaLWv6FgPu-JAYMnF8ARU [1] => -1inA-aGQgjR2pypDk4pkyO [2] => ) [11] => Array ( [0] => -QfiDbNrRwQWRl3VXTbLy4R [1] => -sbjz8667c9R-gauujjvEPB [2] => ) [12] => Array ( [0] => -Uag_3AfSF0lG7hIBXKQHMV [1] => -VMurdmCs4BUCu3dlx5vu5h [2] => ) [13] => Array ( [0] => -12HBFks7b30Dh6M2ag8JQb [1] => -pf997oEEdl6jPJij6VY1Z9 [2] => ) [14] => Array ( [0] => -1uvL8tdcX10MJ69xpj4fOb [1] => -ymH_1L1IRI6w8LM8jS_Dl1 [2] => ) [15] => Array ( [0] => -KoifXBt7w6NzY8RQuOXMzW [1] => -HbI_M3npys3h_pFru_z52_ [2] => ) [16] => Array ( [0] => -vH2to29EYrVYx9KWkzoSax [1] => -P6znyUpiePcSDHY3DkeKMX [2] => ) [17] => Array ( [0] => -IrIqgBunYz3GapKROBkkZ4 [1] => -syjXRCXZ0Fg0Jm2ICmruH4 [2] => ) [18] => Array ( [0] => -fRNAhadNBWmljSlWQ1zH-j [1] => -FIufHexKssyl3zCo2Gvkzm [2] => ) [19] => Array ( [0] => -PwLnieAnP0darpWn4R7COU [1] => -mI2CT3C5GehaD5ktwBoHGY [2] => ) [20] => Array ( [0] => -qrRqiLHDrHQzZXxG22Iouh [1] => --uSB6MsAbvpNUsRXWDR8i7 [2] => ) [21] => Array ( [0] => -TaHU8673A8URxdZcimtWOz [1] => -rIhj5i6ZqJ_ZxrZR3At-s9 [2] => 919425365822 ) ) [dxid] => Array ( [0] => -BGwW9UtFGEQQgpV4qPPeLY ) [eptime] => 1461238431 [isundo] => 0 [mxname] => Newejdjd Profile ndk [nxdescription] => 22 contacts added to Latest Group phonebook by Newejdjd Profile ndk [nxtimestamp] => 1461238431 [owner] => 919632587412 [process] => Array ( [0] => iOS [1] => 61 [2] => 9.3.1 [3] => iPhone [4] => B93324759C7C423B8B572D9ED1A1F0F4 [5] => ContactListViewController.addDir(addExisting) [6] => nxc ) [state] => pending [ttl] => 1.47705e+09 [type] => nx [udid] => B9332475-9C7C-423B-8B57-2D9ED1A1F0F4 ) [flags] => 0 [cas] => Resource id #10 ) )        
//       
//$data = { "data": [
//    [
//      "Caesar Vance",
//      "Pre-Sales Support",
//      "New York",
//      "8330",
//      "2011/12/12",
//      "$106,450"
//    ],
//    [
//      "Doris Wilder",
//      "Sales Assistant",
//      "Sidney",
//      "3023",
//      "2010/09/20",
//      "$85,600"
//    ],
//  
//  ]
//}
        return Datatables::of(User::query())->make(true);
    }
}
