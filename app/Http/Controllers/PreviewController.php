<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Log;
use Auth;

use App\User;

class PreviewController extends Controller
{
    public function index()
    {
        $user = User::with('work', 'teach', 'essay', 'basic', 'appendix', 'work.workExperiences', 'work.expertises', 'teach.teachExperiences', 'basic.eduHistorys')->get()->find(Auth::user()->id);
        $loginUser = Auth::check() ? Auth::user()->email : null;
        $eduStatusDictionary = [
            "0" => "未填寫",
            "1" => "已畢業",
            "2" => "應屆畢業",
            "3" => "肄業",
            "4" => "就學中"
        ];
        $degreeLevelDictionary = [
            "0" => "未填寫",
            "1" => "博士",
            "2" => "碩士",
            "3" => "大學",
            "4" => "四技",
            "5" => "二技",
            "6" => "二專",
            "7" => "三專",
            "8" => "五專",
            "9" => "高中",
            "10" => "高職",
            "11" => "國中(含)以下"
        ];
        $classDictionary = [
            "0"          => "未填寫",
            "3001000000" => "教育學科類",
            "3002000000" => "藝術學科類",
            "3003000000" => "語文及人文學科類",
            "3004000000" => "經濟社會及心理學科類",
            "3005000000" => "法律學科類",
            "3006000000" => "商業及管理學科類",
            "3007000000" => "自然科學學科類",
            "3008000000" => "數學及電算機科學學科類",
            "3009000000" => "醫藥衛生學科類",
            "3010000000" => "工業技藝及機械學科類",
            "3011000000" => "工程學科類",
            "3012000000" => "建築及都市規劃學科類",
            "3013000000" => "農林漁牧學科類",
            "3014000000" => "家政相關學科類",
            "3015000000" => "運輸通信學科類",
            "3016000000" => "觀光服務學科類",
            "3017000000" => "大眾傳播學科類",
            "3018000000" => "其他學科類",
            "7001000000" => "亞洲",
            "7002000000" => "大洋洲",
            "7003000000" => "美洲",
            "7004000000" => "歐洲",
            "7005000000" => "非洲",
            "3001001000" => "綜合教育相關",
            "3001002000" => "普通科目教育相關",
            "3001003000" => "專業科目教育相關",
            "3001004000" => "學前教育相關",
            "3001005000" => "其他教育相關",
            "3002001000" => "美術學相關",
            "3002002000" => "雕塑藝術相關",
            "3002003000" => "美術工藝相關",
            "3002004000" => "音樂學器相關",
            "3002005000" => "戲劇舞蹈相關",
            "3002006000" => "電影藝術相關",
            "3002007000" => "室內藝術相關",
            "3002008000" => "藝術商業設計",
            "3003001000" => "本國語文相關",
            "3003002000" => "英美語文相關",
            "3003003000" => "日文相關科系",
            "3003004000" => "其他外國語文相關",
            "3003005000" => "語言學相關",
            "3003006000" => "歷史學相關",
            "3003007000" => "人類學相關",
            "3003008000" => "哲學相關",
            "3003009000" => "其他人文學相關",
            "3004001000" => "經濟學相關",
            "3004002000" => "政治學相關",
            "3004003000" => "社會學相關",
            "3004004000" => "民族學相關",
            "3004007000" => "區域研究相關",
            "3004008000" => "其他經社心理相關",
            "3005001000" => "法律相關科系",
            "3006001000" => "一般商業學類",
            "3006002000" => "文書管理相關",
            "3006003000" => "會計學相關",
            "3006004000" => "統計學相關",
            "3006005000" => "資訊管理相關",
            "3006006000" => "企業管理相關",
            "3006007000" => "工業管理相關",
            "3006008000" => "人力資源相關",
            "3006009000" => "市場行銷相關",
            "3006010000" => "國際貿易相關",
            "3006011000" => "財稅金融相關",
            "3006012000" => "銀行保險相關",
            "3006013000" => "公共行政相關",
            "3006014000" => "其他商業及管理相關",
            "3007001000" => "生物學相關",
            "3007002000" => "化學相關",
            "3007003000" => "地質學相關",
            "3007004000" => "物理學相關",
            "3007005000" => "氣象學相關",
            "3007006000" => "海洋學相關",
            "3007007000" => "其他自然科學相關",
            "3008001000" => "一般數學相關",
            "3008002000" => "數理統計相關",
            "3008003000" => "應用數學相關",
            "3008004000" => "資訊工程相關",
            "3008005000" => "其他數學及電算機科學相關",
            "3009001000" => "公共衛生相關",
            "3009002000" => "醫學系相關",
            "3009003000" => "中醫學系",
            "3009004000" => "復健醫學相關",
            "3009005000" => "護理助產相關",
            "3009006000" => "醫學技術及檢驗相關",
            "3009007000" => "牙醫學相關",
            "3009008000" => "藥學相關",
            "3009009000" => "醫藥工程相關",
            "3009010000" => "醫務管理相關",
            "3009011000" => "獸醫相關",
            "3009012000" => "其他醫藥衛生相關",
            "3010001000" => "電機電子維護相關",
            "3010002000" => "金屬加工相關",
            "3010003000" => "機械維護相關",
            "3010004000" => "木工相關",
            "3010005000" => "冷凍空調相關",
            "3010006000" => "印刷相關",
            "3010007000" => "汽車汽修相關",
            "3010008000" => "其他工業技藝相關",
            "3011001000" => "測量工程相關",
            "3011002000" => "工業設計相關",
            "3011003000" => "化學工程相關",
            "3011004000" => "材料工程相關",
            "3011005000" => "土木工程相關",
            "3011006000" => "環境工程相關",
            "3011007000" => "河海或船舶工程",
            "3011008000" => "電機電子工程相關",
            "3011009000" => "工業工程相關",
            "3011010000" => "礦冶工程相關",
            "3011011000" => "機械工程相關",
            "3011012000" => "航太工程相關",
            "3011013000" => "農業工程相關",
            "3011014000" => "紡織工程相關",
            "3011015000" => "核子工程相關",
            "3011016000" => "光電工程相關",
            "3011017000" => "其他工程相關",
            "3012001000" => "建築相關",
            "3012002000" => "景觀設計相關",
            "3012003000" => "都巿規劃相關",
            "3012004000" => "其他建築及都市規劃學類",
            "3013001000" => "農業相關",
            "3013002000" => "畜牧相關",
            "3013003000" => "園藝相關",
            "3013004000" => "植物保護相關",
            "3013005000" => "農業經濟相關",
            "3013006000" => "食品科學相關",
            "3013007000" => "水土保持相關",
            "3013008000" => "農業化學相關",
            "3013009000" => "林業相關",
            "3013010000" => "漁業相關",
            "3013011000" => "其他農林漁牧相關",
            "3014001000" => "綜合家政相關",
            "3014002000" => "食品營養相關",
            "3014003000" => "兒童保育相關",
            "3014004000" => "服裝設計相關",
            "3014005000" => "美容美髮相關",
            "3014006000" => "其他家政相關",
            "3015001000" => "運輸管理相關",
            "3015002000" => "航空相關",
            "3015003000" => "航海相關",
            "3015004000" => "航運管理相關",
            "3015005000" => "通信學類",
            "3015006000" => "其他運輸通信相關",
            "3016001000" => "儀容服務學類",
            "3016002000" => "餐旅服務相關",
            "3016003000" => "觀光事務相關",
            "3016004000" => "其他觀光服務相關",
            "3017002000" => "新聞學相關",
            "3017003000" => "廣播電視相關",
            "3017004000" => "公共關係相關",
            "3017001000" => "大眾傳播學相關",
            "3017005000" => "圖書管理相關",
            "3017006000" => "文物傳播相關",
            "3017007000" => "其他大眾傳播相關",
            "3018001000" => "普通科",
            "3018002000" => "警政相關",
            "3018003000" => "軍事相關",
            "3018004000" => "體育相關",
            "3018005000" => "其他相關科系",
            "7001053000" => "台灣",
            "7001001000" => "大陸",
            "7001002000" => "香港/澳門",
            "7001003000" => "日本",
            "7001004000" => "北韓",
            "7001005000" => "南韓",
            "7001006000" => "越南",
            "7001007000" => "寮國",
            "7001008000" => "柬埔寨",
            "7001009000" => "緬甸",
            "7001010000" => "泰國",
            "7001011000" => "馬來西亞",
            "7001012000" => "新加坡",
            "7001013000" => "菲律賓",
            "7001014000" => "汶萊",
            "7001015000" => "印尼",
            "7001016000" => "阿富汗",
            "7001017000" => "巴林",
            "7001018000" => "伊朗",
            "7001019000" => "伊拉克",
            "7001020000" => "以色列",
            "7001021000" => "約旦",
            "7001022000" => "科威特",
            "7001023000" => "黎巴嫩",
            "7001024000" => "阿曼",
            "7001025000" => "卡達",
            "7001026000" => "沙烏地阿拉伯",
            "7001027000" => "敘利亞",
            "7001028000" => "土耳其",
            "7001029000" => "阿拉伯大公國",
            "7001030000" => "葉門",
            "7001031000" => "孟加拉",
            "7001032000" => "不丹",
            "7001033000" => "印度",
            "7001034000" => "馬爾地夫",
            "7001035000" => "尼泊爾",
            "7001036000" => "巴基斯坦",
            "7001037000" => "斯里蘭卡",
            "7001038000" => "蒙古",
            "7001039000" => "俄羅斯",
            "7001040000" => "亞美尼亞",
            "7001041000" => "亞塞拜然",
            "7001042000" => "白俄羅斯",
            "7001043000" => "賽普勒斯",
            "7001044000" => "喬治亞",
            "7001045000" => "摩爾多瓦",
            "7001046000" => "烏克蘭",
            "7001047000" => "東帝汶",
            "7001048000" => "哈薩克",
            "7001049000" => "吉爾吉斯",
            "7001050000" => "塔吉克",
            "7001051000" => "土庫曼",
            "7001052000" => "烏茲別克",
            "7002002000" => "紐西蘭",
            "7002003000" => "巴布亞紐幾內亞",
            "7002004000" => "庫克群島",
            "7002005000" => "斐濟",
            "7002006000" => "吉里巴斯",
            "7002007000" => "馬爾地夫",
            "7002008000" => "馬紹爾群島",
            "7002009000" => "密克羅尼西亞",
            "7002010000" => "諾魯",
            "7002011000" => "紐埃",
            "7002012000" => "帛琉",
            "7002013000" => "薩摩亞",
            "7002014000" => "索羅門群島",
            "7002015000" => "東加",
            "7002016000" => "吐瓦魯",
            "7002017000" => "萬那杜",
            "7003001000" => "加拿大",
            "7003002000" => "美國",
            "7003003000" => "貝里斯",
            "7003004000" => "哥斯大黎加",
            "7003005000" => "薩爾瓦多",
            "7003006000" => "瓜地馬拉",
            "7003007000" => "宏都拉斯",
            "7003008000" => "尼加拉瓜",
            "7003009000" => "巴拿馬",
            "7003010000" => "烏拉圭",
            "7003011000" => "厄瓜多",
            "7003012000" => "哥倫比亞",
            "7003013000" => "巴拉圭",
            "7003014000" => "巴西",
            "7003015000" => "智利",
            "7003016000" => "玻利維亞",
            "7003017000" => "秘魯",
            "7003018000" => "蘇利南",
            "7003019000" => "阿根廷",
            "7003021000" => "墨西哥",
            "7003020000" => "多明尼加",
            "7003022000" => "委內瑞拉",
            "7003023000" => "古巴",
            "7004001000" => "挪威",
            "7004002000" => "瑞典",
            "7004003000" => "芬蘭",
            "7004004000" => "丹麥",
            "7004005000" => "冰島",
            "7004006000" => "阿爾巴尼亞",
            "7004007000" => "安道爾",
            "7004008000" => "波士尼亞赫塞哥維納",
            "7004009000" => "保加利亞",
            "7004010000" => "克羅埃西亞",
            "7004011000" => "賽普勒斯",
            "7004012000" => "希臘",
            "7004013000" => "義大利",
            "7004014000" => "馬其頓",
            "7004015000" => "馬爾他",
            "7004016000" => "葡萄牙",
            "7004017000" => "羅馬尼亞",
            "7004018000" => "聖馬利諾",
            "7004019000" => "塞爾維亞和黑山",
            "7004020000" => "斯洛維尼亞",
            "7004021000" => "西班牙",
            "7004022000" => "白俄羅斯",
            "7004023000" => "愛沙尼亞",
            "7004024000" => "拉脫維亞",
            "7004025000" => "立陶宛",
            "7004026000" => "摩爾多瓦",
            "7004027000" => "俄羅斯",
            "7004028000" => "烏克蘭",
            "7004029000" => "比利時",
            "7004030000" => "法國",
            "7004031000" => "愛爾蘭",
            "7004032000" => "盧森堡",
            "7004033000" => "摩納哥",
            "7004034000" => "荷蘭",
            "7004035000" => "英國",
            "7004036000" => "奧地利",
            "7004037000" => "捷克",
            "7004038000" => "德國",
            "7004039000" => "匈牙利",
            "7004040000" => "列支敦斯登",
            "7004041000" => "波蘭",
            "7004042000" => "斯洛伐克",
            "7004043000" => "瑞士",
            "7005000000" => "非洲",
            "7005001000" => "阿爾及利亞",
            "7005002000" => "埃及",
            "7005003000" => "利比亞",
            "7005004000" => "蘇丹",
            "7005005000" => "突尼西亞",
            "7005006000" => "西撒哈拉",
            "7005007000" => "摩洛哥",
            "7005008000" => "中非",
            "7005009000" => "喀麥隆",
            "7005010000" => "赤道幾內亞",
            "7005011000" => "加彭",
            "7005012000" => "剛果",
            "7005013000" => "剛果(金)",
            "7005014000" => "聖多美和普林西比",
            "7005015000" => "安哥拉",
            "7005016000" => "波札那",
            "7005017000" => "賴索托",
            "7005018000" => "馬達加斯加",
            "7005019000" => "馬拉威",
            "7005020000" => "模里西斯",
            "7005021000" => "莫三比克",
            "7005022000" => "納米比亞",
            "7005023000" => "史瓦濟蘭",
            "7005024000" => "南非",
            "7005025000" => "坦尚尼亞",
            "7005026000" => "尚比亞",
            "7005027000" => "辛巴威",
            "7005028000" => "留尼旺",
            "7005029000" => "聖赫倫那",
            "7005030000" => "衣索比亞",
            "7005031000" => "蒲隆地",
            "7005032000" => "厄利垂亞",
            "7005033000" => "吉布地",
            "7005034000" => "葛摩",
            "7005035000" => "肯亞",
            "7005036000" => "盧安達",
            "7005037000" => "塞席爾",
            "7005038000" => "索馬利亞",
            "7005040000" => "烏干達",
            "7005041000" => "貝南",
            "7005042000" => "布吉納法索",
            "7005043000" => "查德",
            "7005045000" => "多哥",
            "7005046000" => "維德角",
            "7005047000" => "甘比亞",
            "7005048000" => "幾內亞",
            "7005049000" => "幾內亞比索",
            "7005050000" => "迦納",
            "7005053000" => "象牙海岸",
            "7005054000" => "賴比瑞亞",
            "7005055000" => "馬利",
            "7005056000" => "尼日",
            "7005057000" => "奈及利亞",
            "7005058000" => "獅子山",
            "7005059000" => "塞內加爾",
        ];

        $data = compact('loginUser', 'user', 'classDictionary', 'degreeLevelDictionary', 'eduStatusDictionary');
        return view('preview.index', $data);
    }

    public function indexApi()
    {
        $users = User::with('work', 'teach', 'essay', 'basic', 'appendix', 'work.workExperiences', 'work.expertises', 'teach.teachExperiences', 'basic.eduHistorys')->get()->toArray();
        $data = compact('users');
        return $data;
    }

    public function pdf()
    {
        $user = User::with('work', 'teach', 'essay', 'basic', 'appendix', 'work.workExperiences', 'work.expertises', 'teach.teachExperiences', 'basic.eduHistorys')->get()->find(Auth::user()->id);
        $loginUser = Auth::check() ? Auth::user()->email : null;
        $eduStatusDictionary = [
            "0" => "未填寫",
            "1" => "已畢業",
            "2" => "應屆畢業",
            "3" => "肄業",
            "4" => "就學中"
        ];
        $degreeLevelDictionary = [
            "0" => "未填寫",
            "1" => "博士",
            "2" => "碩士",
            "3" => "大學",
            "4" => "四技",
            "5" => "二技",
            "6" => "二專",
            "7" => "三專",
            "8" => "五專",
            "9" => "高中",
            "10" => "高職",
            "11" => "國中(含)以下"
        ];
        $classDictionary = [
            "0"          => "未填寫",
            "3001000000" => "教育學科類",
            "3002000000" => "藝術學科類",
            "3003000000" => "語文及人文學科類",
            "3004000000" => "經濟社會及心理學科類",
            "3005000000" => "法律學科類",
            "3006000000" => "商業及管理學科類",
            "3007000000" => "自然科學學科類",
            "3008000000" => "數學及電算機科學學科類",
            "3009000000" => "醫藥衛生學科類",
            "3010000000" => "工業技藝及機械學科類",
            "3011000000" => "工程學科類",
            "3012000000" => "建築及都市規劃學科類",
            "3013000000" => "農林漁牧學科類",
            "3014000000" => "家政相關學科類",
            "3015000000" => "運輸通信學科類",
            "3016000000" => "觀光服務學科類",
            "3017000000" => "大眾傳播學科類",
            "3018000000" => "其他學科類",
            "7001000000" => "亞洲",
            "7002000000" => "大洋洲",
            "7003000000" => "美洲",
            "7004000000" => "歐洲",
            "7005000000" => "非洲",
            "3001001000" => "綜合教育相關",
            "3001002000" => "普通科目教育相關",
            "3001003000" => "專業科目教育相關",
            "3001004000" => "學前教育相關",
            "3001005000" => "其他教育相關",
            "3002001000" => "美術學相關",
            "3002002000" => "雕塑藝術相關",
            "3002003000" => "美術工藝相關",
            "3002004000" => "音樂學器相關",
            "3002005000" => "戲劇舞蹈相關",
            "3002006000" => "電影藝術相關",
            "3002007000" => "室內藝術相關",
            "3002008000" => "藝術商業設計",
            "3003001000" => "本國語文相關",
            "3003002000" => "英美語文相關",
            "3003003000" => "日文相關科系",
            "3003004000" => "其他外國語文相關",
            "3003005000" => "語言學相關",
            "3003006000" => "歷史學相關",
            "3003007000" => "人類學相關",
            "3003008000" => "哲學相關",
            "3003009000" => "其他人文學相關",
            "3004001000" => "經濟學相關",
            "3004002000" => "政治學相關",
            "3004003000" => "社會學相關",
            "3004004000" => "民族學相關",
            "3004007000" => "區域研究相關",
            "3004008000" => "其他經社心理相關",
            "3005001000" => "法律相關科系",
            "3006001000" => "一般商業學類",
            "3006002000" => "文書管理相關",
            "3006003000" => "會計學相關",
            "3006004000" => "統計學相關",
            "3006005000" => "資訊管理相關",
            "3006006000" => "企業管理相關",
            "3006007000" => "工業管理相關",
            "3006008000" => "人力資源相關",
            "3006009000" => "市場行銷相關",
            "3006010000" => "國際貿易相關",
            "3006011000" => "財稅金融相關",
            "3006012000" => "銀行保險相關",
            "3006013000" => "公共行政相關",
            "3006014000" => "其他商業及管理相關",
            "3007001000" => "生物學相關",
            "3007002000" => "化學相關",
            "3007003000" => "地質學相關",
            "3007004000" => "物理學相關",
            "3007005000" => "氣象學相關",
            "3007006000" => "海洋學相關",
            "3007007000" => "其他自然科學相關",
            "3008001000" => "一般數學相關",
            "3008002000" => "數理統計相關",
            "3008003000" => "應用數學相關",
            "3008004000" => "資訊工程相關",
            "3008005000" => "其他數學及電算機科學相關",
            "3009001000" => "公共衛生相關",
            "3009002000" => "醫學系相關",
            "3009003000" => "中醫學系",
            "3009004000" => "復健醫學相關",
            "3009005000" => "護理助產相關",
            "3009006000" => "醫學技術及檢驗相關",
            "3009007000" => "牙醫學相關",
            "3009008000" => "藥學相關",
            "3009009000" => "醫藥工程相關",
            "3009010000" => "醫務管理相關",
            "3009011000" => "獸醫相關",
            "3009012000" => "其他醫藥衛生相關",
            "3010001000" => "電機電子維護相關",
            "3010002000" => "金屬加工相關",
            "3010003000" => "機械維護相關",
            "3010004000" => "木工相關",
            "3010005000" => "冷凍空調相關",
            "3010006000" => "印刷相關",
            "3010007000" => "汽車汽修相關",
            "3010008000" => "其他工業技藝相關",
            "3011001000" => "測量工程相關",
            "3011002000" => "工業設計相關",
            "3011003000" => "化學工程相關",
            "3011004000" => "材料工程相關",
            "3011005000" => "土木工程相關",
            "3011006000" => "環境工程相關",
            "3011007000" => "河海或船舶工程",
            "3011008000" => "電機電子工程相關",
            "3011009000" => "工業工程相關",
            "3011010000" => "礦冶工程相關",
            "3011011000" => "機械工程相關",
            "3011012000" => "航太工程相關",
            "3011013000" => "農業工程相關",
            "3011014000" => "紡織工程相關",
            "3011015000" => "核子工程相關",
            "3011016000" => "光電工程相關",
            "3011017000" => "其他工程相關",
            "3012001000" => "建築相關",
            "3012002000" => "景觀設計相關",
            "3012003000" => "都巿規劃相關",
            "3012004000" => "其他建築及都市規劃學類",
            "3013001000" => "農業相關",
            "3013002000" => "畜牧相關",
            "3013003000" => "園藝相關",
            "3013004000" => "植物保護相關",
            "3013005000" => "農業經濟相關",
            "3013006000" => "食品科學相關",
            "3013007000" => "水土保持相關",
            "3013008000" => "農業化學相關",
            "3013009000" => "林業相關",
            "3013010000" => "漁業相關",
            "3013011000" => "其他農林漁牧相關",
            "3014001000" => "綜合家政相關",
            "3014002000" => "食品營養相關",
            "3014003000" => "兒童保育相關",
            "3014004000" => "服裝設計相關",
            "3014005000" => "美容美髮相關",
            "3014006000" => "其他家政相關",
            "3015001000" => "運輸管理相關",
            "3015002000" => "航空相關",
            "3015003000" => "航海相關",
            "3015004000" => "航運管理相關",
            "3015005000" => "通信學類",
            "3015006000" => "其他運輸通信相關",
            "3016001000" => "儀容服務學類",
            "3016002000" => "餐旅服務相關",
            "3016003000" => "觀光事務相關",
            "3016004000" => "其他觀光服務相關",
            "3017002000" => "新聞學相關",
            "3017003000" => "廣播電視相關",
            "3017004000" => "公共關係相關",
            "3017001000" => "大眾傳播學相關",
            "3017005000" => "圖書管理相關",
            "3017006000" => "文物傳播相關",
            "3017007000" => "其他大眾傳播相關",
            "3018001000" => "普通科",
            "3018002000" => "警政相關",
            "3018003000" => "軍事相關",
            "3018004000" => "體育相關",
            "3018005000" => "其他相關科系",
            "7001053000" => "台灣",
            "7001001000" => "大陸",
            "7001002000" => "香港/澳門",
            "7001003000" => "日本",
            "7001004000" => "北韓",
            "7001005000" => "南韓",
            "7001006000" => "越南",
            "7001007000" => "寮國",
            "7001008000" => "柬埔寨",
            "7001009000" => "緬甸",
            "7001010000" => "泰國",
            "7001011000" => "馬來西亞",
            "7001012000" => "新加坡",
            "7001013000" => "菲律賓",
            "7001014000" => "汶萊",
            "7001015000" => "印尼",
            "7001016000" => "阿富汗",
            "7001017000" => "巴林",
            "7001018000" => "伊朗",
            "7001019000" => "伊拉克",
            "7001020000" => "以色列",
            "7001021000" => "約旦",
            "7001022000" => "科威特",
            "7001023000" => "黎巴嫩",
            "7001024000" => "阿曼",
            "7001025000" => "卡達",
            "7001026000" => "沙烏地阿拉伯",
            "7001027000" => "敘利亞",
            "7001028000" => "土耳其",
            "7001029000" => "阿拉伯大公國",
            "7001030000" => "葉門",
            "7001031000" => "孟加拉",
            "7001032000" => "不丹",
            "7001033000" => "印度",
            "7001034000" => "馬爾地夫",
            "7001035000" => "尼泊爾",
            "7001036000" => "巴基斯坦",
            "7001037000" => "斯里蘭卡",
            "7001038000" => "蒙古",
            "7001039000" => "俄羅斯",
            "7001040000" => "亞美尼亞",
            "7001041000" => "亞塞拜然",
            "7001042000" => "白俄羅斯",
            "7001043000" => "賽普勒斯",
            "7001044000" => "喬治亞",
            "7001045000" => "摩爾多瓦",
            "7001046000" => "烏克蘭",
            "7001047000" => "東帝汶",
            "7001048000" => "哈薩克",
            "7001049000" => "吉爾吉斯",
            "7001050000" => "塔吉克",
            "7001051000" => "土庫曼",
            "7001052000" => "烏茲別克",
            "7002002000" => "紐西蘭",
            "7002003000" => "巴布亞紐幾內亞",
            "7002004000" => "庫克群島",
            "7002005000" => "斐濟",
            "7002006000" => "吉里巴斯",
            "7002007000" => "馬爾地夫",
            "7002008000" => "馬紹爾群島",
            "7002009000" => "密克羅尼西亞",
            "7002010000" => "諾魯",
            "7002011000" => "紐埃",
            "7002012000" => "帛琉",
            "7002013000" => "薩摩亞",
            "7002014000" => "索羅門群島",
            "7002015000" => "東加",
            "7002016000" => "吐瓦魯",
            "7002017000" => "萬那杜",
            "7003001000" => "加拿大",
            "7003002000" => "美國",
            "7003003000" => "貝里斯",
            "7003004000" => "哥斯大黎加",
            "7003005000" => "薩爾瓦多",
            "7003006000" => "瓜地馬拉",
            "7003007000" => "宏都拉斯",
            "7003008000" => "尼加拉瓜",
            "7003009000" => "巴拿馬",
            "7003010000" => "烏拉圭",
            "7003011000" => "厄瓜多",
            "7003012000" => "哥倫比亞",
            "7003013000" => "巴拉圭",
            "7003014000" => "巴西",
            "7003015000" => "智利",
            "7003016000" => "玻利維亞",
            "7003017000" => "秘魯",
            "7003018000" => "蘇利南",
            "7003019000" => "阿根廷",
            "7003021000" => "墨西哥",
            "7003020000" => "多明尼加",
            "7003022000" => "委內瑞拉",
            "7003023000" => "古巴",
            "7004001000" => "挪威",
            "7004002000" => "瑞典",
            "7004003000" => "芬蘭",
            "7004004000" => "丹麥",
            "7004005000" => "冰島",
            "7004006000" => "阿爾巴尼亞",
            "7004007000" => "安道爾",
            "7004008000" => "波士尼亞赫塞哥維納",
            "7004009000" => "保加利亞",
            "7004010000" => "克羅埃西亞",
            "7004011000" => "賽普勒斯",
            "7004012000" => "希臘",
            "7004013000" => "義大利",
            "7004014000" => "馬其頓",
            "7004015000" => "馬爾他",
            "7004016000" => "葡萄牙",
            "7004017000" => "羅馬尼亞",
            "7004018000" => "聖馬利諾",
            "7004019000" => "塞爾維亞和黑山",
            "7004020000" => "斯洛維尼亞",
            "7004021000" => "西班牙",
            "7004022000" => "白俄羅斯",
            "7004023000" => "愛沙尼亞",
            "7004024000" => "拉脫維亞",
            "7004025000" => "立陶宛",
            "7004026000" => "摩爾多瓦",
            "7004027000" => "俄羅斯",
            "7004028000" => "烏克蘭",
            "7004029000" => "比利時",
            "7004030000" => "法國",
            "7004031000" => "愛爾蘭",
            "7004032000" => "盧森堡",
            "7004033000" => "摩納哥",
            "7004034000" => "荷蘭",
            "7004035000" => "英國",
            "7004036000" => "奧地利",
            "7004037000" => "捷克",
            "7004038000" => "德國",
            "7004039000" => "匈牙利",
            "7004040000" => "列支敦斯登",
            "7004041000" => "波蘭",
            "7004042000" => "斯洛伐克",
            "7004043000" => "瑞士",
            "7005000000" => "非洲",
            "7005001000" => "阿爾及利亞",
            "7005002000" => "埃及",
            "7005003000" => "利比亞",
            "7005004000" => "蘇丹",
            "7005005000" => "突尼西亞",
            "7005006000" => "西撒哈拉",
            "7005007000" => "摩洛哥",
            "7005008000" => "中非",
            "7005009000" => "喀麥隆",
            "7005010000" => "赤道幾內亞",
            "7005011000" => "加彭",
            "7005012000" => "剛果",
            "7005013000" => "剛果(金)",
            "7005014000" => "聖多美和普林西比",
            "7005015000" => "安哥拉",
            "7005016000" => "波札那",
            "7005017000" => "賴索托",
            "7005018000" => "馬達加斯加",
            "7005019000" => "馬拉威",
            "7005020000" => "模里西斯",
            "7005021000" => "莫三比克",
            "7005022000" => "納米比亞",
            "7005023000" => "史瓦濟蘭",
            "7005024000" => "南非",
            "7005025000" => "坦尚尼亞",
            "7005026000" => "尚比亞",
            "7005027000" => "辛巴威",
            "7005028000" => "留尼旺",
            "7005029000" => "聖赫倫那",
            "7005030000" => "衣索比亞",
            "7005031000" => "蒲隆地",
            "7005032000" => "厄利垂亞",
            "7005033000" => "吉布地",
            "7005034000" => "葛摩",
            "7005035000" => "肯亞",
            "7005036000" => "盧安達",
            "7005037000" => "塞席爾",
            "7005038000" => "索馬利亞",
            "7005040000" => "烏干達",
            "7005041000" => "貝南",
            "7005042000" => "布吉納法索",
            "7005043000" => "查德",
            "7005045000" => "多哥",
            "7005046000" => "維德角",
            "7005047000" => "甘比亞",
            "7005048000" => "幾內亞",
            "7005049000" => "幾內亞比索",
            "7005050000" => "迦納",
            "7005053000" => "象牙海岸",
            "7005054000" => "賴比瑞亞",
            "7005055000" => "馬利",
            "7005056000" => "尼日",
            "7005057000" => "奈及利亞",
            "7005058000" => "獅子山",
            "7005059000" => "塞內加爾",
        ];

        $data = compact('loginUser', 'user', 'classDictionary', 'degreeLevelDictionary', 'eduStatusDictionary');
        return view('preview.pdf', $data);
    }

}
