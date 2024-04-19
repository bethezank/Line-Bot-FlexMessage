<?php

// Replace these with your actual values
$channelId = "2004694757"; // Your LINE Messaging API channel ID
$accessToken = "nUVRZW50QwxjESyC0xOp8VYqN1QJfoIf2PSzMuwXNrnlf71ioC1McAtf870A7hwZSPjFGuh7+FLjNSrzGqWv89/0RnB6RD+1n2QhwjC1Jaa7T00anqXZbHXuOIMWg+Ja//jQ1yZw9XRoA/wlp7EWswdB04t89/1O/w1cDnyilFU="; // Your LINE Messaging API access token
// $userId = "Ubf5624686ef73f4365585736c0c1707c"; // user id
$userId = "Ceb81321e947581a11089dea3f92f4844"; // group id

// =========================================================================================================

$flexMessage = [
    "type" => "carousel",
    "contents" => getDemoMessage()
];

$data = [
    "to" => $userId,
    "messages" => [
        [
            "type" => "flex",
            "altText" => "รายการ Feedback รอดำเนินการ",
            "contents" => $flexMessage
        ]
    ]
];

$jsonData = json_encode($data);


$res = sendMessage($accessToken, $jsonData);

if ($res['statusCode'] == 200) {
    echo "Message sent successfully!";
} else {
    echo "Error sending message: " . $res['response'];
}

// =========================================================================================================

function getDemoMessage()
{

    $loop = 3;
    $arrayMessage = [];
    for ($i = 1; $i <= $loop; $i++) {
        $arrayMessage = [
            ...$arrayMessage, 
            [
                "type" => "bubble",
                "size" => "mega",
                "hero" => [
                    "type" => "image",
                    "size" => "full",
                    "aspectRatio" => "20:13",
                    "aspectMode" => "cover",
                    "url" => "https://bethezank.com/lab/reportPCS/uploads/1712643703/BTZ-1712643703-0.jpeg"
                ],
                "body" => [
                    "type" => "box",
                    "layout" => "vertical",
                    "spacing" => "sm",
                    "contents" => [
                        [
                            "type" => "box",
                            "layout" => "horizontal",
                            "contents" => [
                                [
                                    "type" => "box",
                                    "layout" => "vertical",
                                    "contents" => [
                                        [
                                            "type" => "text",
                                            "text" => "รอดำเนินการ",
                                            "size" => "xs",
                                            "color" => "#FFFFFF",
                                            "align" => "center",
                                            "gravity" => "center",
                                            "wrap" => true,
                                            "style" => "normal"
                                        ]
                                    ],
                                    "backgroundColor" => "#DAA520",
                                    "cornerRadius" => "md"
                                ],
                                [
                                    "type" => "filler"
                                ],
                                [
                                    "type" => "filler"
                                ]
                            ],
                            "cornerRadius" => "md",
                            "paddingAll" => "none",
                            "paddingStart" => "none",
                            "paddingEnd" => "none",
                            "spacing" => "none"
                        ],
                        [
                            "type" => "text",
                            "text" => "Hillhut [ id : {$i} ]",
                            "wrap" => true,
                            "weight" => "bold",
                            "size" => "xl"
                        ],
                        [
                            "type" => "separator"
                        ],
                        [
                            "type" => "box",
                            "layout" => "baseline",
                            "contents" => [
                                [
                                    "type" => "text",
                                    "text" => "โรงงาน : NK",
                                    "wrap" => true,
                                    "weight" => "bold",
                                    "size" => "sm",
                                    "flex" => 0
                                ]
                            ]
                        ],
                        [
                            "type" => "box",
                            "layout" => "baseline",
                            "contents" => [
                                [
                                    "type" => "text",
                                    "text" => "ชิ้นงาน : WC213",
                                    "wrap" => true,
                                    "weight" => "bold",
                                    "size" => "sm",
                                    "flex" => 0
                                ]
                            ]
                        ],
                        [
                            "type" => "box",
                            "layout" => "baseline",
                            "contents" => [
                                [
                                    "type" => "text",
                                    "text" => "Type : A",
                                    "wrap" => true,
                                    "weight" => "bold",
                                    "size" => "sm",
                                    "flex" => 0
                                ]
                            ]
                        ],
                        [
                            "type" => "box",
                            "layout" => "baseline",
                            "contents" => [
                                [
                                    "type" => "text",
                                    "text" => "แปลง : A146",
                                    "wrap" => true,
                                    "weight" => "bold",
                                    "size" => "sm",
                                    "flex" => 0
                                ]
                            ]
                        ],
                        [
                            "type" => "box",
                            "layout" => "baseline",
                            "contents" => [
                                [
                                    "type" => "text",
                                    "text" => "ประเภทของปัญหา : ออกแบบ",
                                    "wrap" => true,
                                    "weight" => "bold",
                                    "size" => "sm",
                                    "flex" => 0
                                ]
                            ]
                        ],
                        [
                            "type" => "box",
                            "layout" => "baseline",
                            "contents" => [
                                [
                                    "type" => "text",
                                    "text" => "วันที่แจ้ง : 12/04/2567 - 12:54:28",
                                    "wrap" => true,
                                    "weight" => "bold",
                                    "size" => "sm",
                                    "flex" => 0
                                ]
                            ]
                        ]
                    ]
                ],
                "footer" => [
                    "type" => "box",
                    "layout" => "vertical",
                    "spacing" => "sm",
                    "contents" => [
                        [
                            "type" => "button",
                            "action" => [
                                "type" => "uri",
                                "label" => "ดูข้อมูล",
                                "uri" => "https://cutt.ly/Ow4ctaBK"
                            ],
                            "style" => "primary",
                            "height" => "sm"
                        ],
                        [
                            "type" => "button",
                            "style" => "secondary",
                            "height" => "sm",
                            "action" => [
                                "type" => "uri",
                                "label" => "แชร์ข้อมูล",
                                "uri" => "https://liff.line.me/1657596432-AdWoz3MV?id={$i}"
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }

    return $arrayMessage;
}


function sendMessage($token, $messages)
{
    // Set up cURL for sending the message
    $ch = curl_init("https://api.line.me/v2/bot/message/push");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
        "Authorization: Bearer {$token}"
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $messages);

    // Send the message and handle the response
    $response = curl_exec($ch);
    $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    return ["statusCode" => $statusCode, "response" => $response];
}
?>
