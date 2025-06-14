<!-- author: Kristine -->
<!-- description: identify process -->
<!-- validated: Ok -->

<html lang="en">
<head>
<title>MYPLANTS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Kristine">
<meta name="description" content="Plant identification project">
<meta name="keywords" content="Plant identification, Plant, take care of plants">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
        // Define the target directory
        $target_dir = __DIR__ . "/uploads/";

        // Check if the directory exists, and create it if not
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true);
        }

        // Define the target file path
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

        // Check if the file is an image
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            $result = identifyPlant($_FILES["fileToUpload"]["name"]);
            echo "<h2>Plant Identification Result:</h2>";
            echo "<p>{$result['message']}</p>";
            if ($result['success']) {
                echo "<h3>Plant Description:</h3>";
                echo "<p>{$result['description']}</p>";
            }
        } else {
            echo "<p>Error: Uploaded file is not an image.</p>";
        }
    } else {
        echo "<p>Error: File upload failed.</p>";
    }
}

function identifyPlant($uploadedFileName) {
    // Define a list of predefined image names, corresponding plant names, and descriptions
    $predefinedImages = [
        "Shoreafaguetiana.png" => [
            "name" => "Shorea Faguetiana",
            "description" => "A species of plant belonging to the Dipterocarpaceae family is called Shorea faguetiana. It shares the name \"Yellow Meranti\" with other species in the genus Shorea. With the largest specimen measuring 100.7 m (330 ft) in height, it is the tallest flowering plant and the second-tallest living tree, only after the sequoia."
        ],
        "Shoreabalanocarpoides.png" => [
            "name" => "Shorea Balanocarpoides",
            "description" => "A tree called Shorea balanocarpoides has a height limit of 40 metres.The tree, which produces \"yellow meranti\" timber, is frequently cut down in the wild and marketed. The seeds are used regionally and harvested for their oil content. According to the IUCN Red List of Threatened Species from 2013 the plant is categorised as 'Endangered'."
        ],
		"Shorealaevis.png" => [
            "name" => "Shorea laevis",
            "description" => "Shorea laevis is a large emergent tree that can reach heights of up to 70 m and has a broad, irregular, diffusely formed cauliflower crown that is pale in colour and can be seen from below. It is known as Kumus in Sarawak and is found in the districts of Belaga, Bintulu, Lawas, Limbang, Kapit, Miri, and Sri Aman.It is one of the most prevalent emergent trees in mixed and upper dipterocarp forests."
        ],
		"Hopeanutans.png" => [
            "name" => "Hopea nutans",
            "description" => "A large species of rainforest tree in the Dipterocarpaceae family is called Hopea nutans. Peninsular Malaysia and Borneo are where you can find it. The Tawau Hills National Park in Sabah, on the island of Borneo, is habitat to the tallest specimen that has been measured at 82.8 m."
        ],
		"HopeaferrugineaParijs.png" => [
            "name" => "Hopea Ferruginea Parijs",
            "description" => "Tall tree with a breast height diameter of 59 cm and a height of up to 41 m.Up to 1500 m above sea level, on ridges, hillsides, and dipterocarp woods."
        ],
		"Hopeamengarawan.png" => [
            "name" => "Hopea mengarawan",
            "description" => "It is a 45-meter-tall tree.When dry, the oblong-lance-shaped, alternating, stalked leaves of this plant have leathery leaf blades that are 6-12 by 2.5-5 cm, brownish below, and golden-brown above."
        ],
		"Parashoreamacrophylla.jpg" => [
            "name" => "Parashorea macrophylla",
            "description" => "The plant species Parashorea macrophylla belongs to the Dipterocarpaceae family. Being found in Brunei, Sarawak, and West Kalimantan, it is endemic to Borneo. In Sarawak, it can be found in protected areas, but habitat degradation poses a hazard elsewhere."
        ],
		"Parashoreaparvifolia.png" => [
            "name" => "Parashorea parvifolia",
            "description" => "Parashorea parvifolia is a species of plant in the family Dipterocarpaceae. Borneo (Brunei, Sabah, Sarawak, and east Kalimantan) is where it only exists. It is a sizable emergent tree that grows up to 60 metres tall and is found in fertile clay soils in mixed dipterocarp forests."
        ],
		"Parashoreatomentella.png" => [
            "name" => "Parashorea tomentella",
            "description" => "A species of plant belonging to the Dipterocarpaceae family is called Parashorea tomentella.Up to 65 m tall, it is a sizable emergent tree that grows in lowland dipterocarp woods on rich clay soils. Under the brand names White Lauan or White Seraya, it is a light hardwood."
        ],
		"Vaticaalbiramis.jpeg" => [
            "name" => "Vatica albiramis",
            "description" => "Vatica albiramis grows up to 25 metres (80 ft) tall, with a trunk diameter of up to 35 cm (10 in). Its coriaceous leaves are elliptic to lanceolate and measure up to 20 cm (8 in) long."
        ],
		"Vaticabadiifolia.jpg" => [
            "name" => "Vatica badiifolia",
            "description" => "Vatica badiifolia grows up to 40 metres (130 ft) tall, with a trunk diameter of up to 50 cm (20 in). Its coriaceous leaves are elliptic and measure up to 15 cm (6 in) long. The inflorescences bear cream flowers."
        ],
		"Vaticaborneensis.jpg" => [
            "name" => "Vatica borneensis",
            "description" => "Vatica borneensis grows up to 35 metres (110 ft) tall, with a trunk diameter of up to 70 cm (30 in). Its coriaceous leaves are elliptic and measure up to 10 cm (4 in) long. The inflorescences are dense and bear pinkish brown flowers."
        ],
		"Vaticabrevipes.jpg" => [
            "name" => "Vatica brevipes",
            "description" => "Vatica brevipes grows up to 25 metres (80 ft) tall, with a trunk diameter of up to 30 cm (12 in). Its chartaceous leaves are elliptic to obovate and measure up to 13 cm (5 in) long. The inflorescences bear cream flowers."
        ],
		"Canariumapertum.png" => [
            "name" => "Canarium apertum",
            "description" => "With a trunk diameter of up to 80 centimetres (31 in), Canarium apertum can reach heights of up to 40 metres (130 ft). The bark is grey-brown and scaly. Yellow-brown flowers are in bloom. The ovoid fruits can be up to 5 cm (2 in) long."
        ],
		"Canariumasperum.jpg" => [
            "name" => "Canarium asperum",
            "description" => "The mid-canopy Canarium asperum tree can reach heights of 8 to 37 metres. It occasionally becomes more of a shrub. The bole can be up to 80 cm in diameter, although buttresses are quite rare."
        ],
		"Canariumcaudatum.png" => [
            "name" => "Canarium caudatum",
            "description" => "With a trunk diameter of up to 40 centimetres (16 in), Canarium caudatum can reach heights of up to 36 metres (120 ft). It has a scaly, greyish bark. Yellow-brown flowers are in bloom. The fruits can grow up to 8 cm (3 in) long and are spindle-shaped."
        ],
		"Dacryodescostata.png" => [
            "name" => "Dacryodes costata",
            "description" => "With a trunk diameter of up to 45 centimetres (18 in), Dacryodes costata can reach heights of up to 45 metres (150 ft). The flaky to smooth bark is grey-brown in colour. White flowers cover them. The fruits can be up to 2.2 cm (1 in) long and are ellipsoid or ovoid in shape."
        ],
		"Dacryodesedulis.jpg" => [
            "name" => "Dacryodes edulis",
            "description" => "An evergreen tree, Dacryodes edulis, can grow to a height of 18 to 40 metres in the wild, but not more than 12 metres in plantations. It has a deep, dense crown and a short trunk."
        ],
		"Dacryodesexpansa.png" => [
            "name" => "Dacryodes expansa",
            "description" => "Dacryodes expansa develops into a little tree. Reddish brown describes the buds. Four leaflets make up the leaves."
        ],
		"Santiriaapiculata.png" => [
            "name" => "Santiria apiculata",
            "description" => "In undisturbed mixed dipterocarp to sub-montane forests up to 1700 m altitude. Mostly growing on hillsides and ridges on clayey to sandy soils. In secondary forests usually present as a pre-disturbance remnant tree."
        ],
		"Santiriagriffithii.jpg" => [
            "name" => "Santiria griffithii",
            "description" => "An upper canopy tree called Santiria griffithii can reach a height of 41 metres and has a buttressed bole measuring 126 cm in diameter[359, 451]. The tree is taken out of the wild to use its wood locally. Commercial logging is done on it to harvest the timber frequently traded globally."
        ],
		"Santiriaimpressinervis.png" => [
            "name" => "Santiria impressinervis",
            "description" => "Santiria impressinervis is a species of plant in the family Burseraceae. It is endemic to the Kelabit Highlands in the Malaysian region of Sarawak on the island of Borneo."
        ],
		"Knemaconferta.png" => [
            "name" => "Knema conferta",
            "description" => "Knema conferta is a species of plant in the family Myristicaceae."
        ],
		"Knemalatericia.png" => [
            "name" => "Knema latericia",
            "description" => "It is a 2–20 m tall tree or shrub without buttress roots.The plant produces male or female flowers on different plants since it is dioecious."
        ],
		"Knemaelmeri.png" => [
            "name" => "Knema elmeri",
            "description" => "Tree 5–15(–36) m tall, occasionally with stilt roots. Round crown; no buttresses; hard, smooth, scaly, flaky, or crackly bark; white, reddish, or red-brown inner bark; brown sapwood."
        ],
		"Myristicacinnamomea.jpg" => [
            "name" => "Myristica cinnamomea",
            "description" => "It is a 10- to 30-meter-tall tree with a buttressed base and occasionally a few stilt roots.The plant produces male or female flowers on different plants since it is dioecious."
        ],
		"Myristicacorticata.png" => [
            "name" => "Myristica corticata",
            "description" => "Myristica corticata is a species of plant in the family Myristicaceae. It is a tree endemic to Borneo"
        ],
		"Myristicainers.png" => [
            "name" => "Myristica iners",
            "description" => "An evergreen tree with a bole up to 59 cm in diameter, the Myristica iners, can reach 5 to 40 meters. The tree may occasionally have buttresses or stilt roots.To smell and fumigate textiles locally, people utilise the wood."
        ],
		"Horsfieldiagracilis.png" => [
            "name" => "Horsfieldia gracilis",
            "description" => "Horsfieldia gracilis is used as a houseplant and as a decorative plant in gardens. Due to its anti-inflammatory and antibacterial qualities, it is also utilised in conventional medicine."
        ],
		"Horsfieldiamontana.png" => [
            "name" => "Horsfieldia montana",
            "description" => "The plant species Horsfieldia montana belongs to the Myristicaceae family. It is a Borneo-exclusive tree. Mountains or coming from mountains are indicated by the Latin specific epithet montana."
        ],
		"Horsfieldiamotleyi.png" => [
            "name" => "Horsfieldia motleyi",
            "description" => "Tree 12-35(-46) m. Twigs (2.5-)3-5 mm in diameter, initially covered in thick, rusty hairs that are 0.5(-1) mm long; bark coarsely striate but not flaking; lenticels barely noticeable."
        ],
    ];

    $uploadedFileName = strtolower($uploadedFileName);

    foreach ($predefinedImages as $imageName => $plantInfo) {
        // Convert both names to lowercase for case-insensitive comparison
        $imageNameLower = strtolower($imageName);
        $uploadedFileNameLower = strtolower($uploadedFileName);

        // Compare the uploaded image name with predefined image names
        if (strpos($uploadedFileNameLower, $imageNameLower) !== false) {
            return [
                'success' => true,
                'message' => "Plant Identified: {$plantInfo['name']}",
                'description' => $plantInfo['description']
            ];
        }
    }

    return [
        'success' => false,
        'message' => "Plant not identified. Try again with a different image.",
        'description' => ''
    ];
}
?>

</body>
</html>
