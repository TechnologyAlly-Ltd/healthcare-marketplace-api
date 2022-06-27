<?php

use TA\HealthcareMarketplaceAPI\HealthcareMarketplaceAPI;

require_once 'vendor/autoload.php';

$healthcare = new HealthcareMarketplaceAPI('d687412e7b53146b2631dc01974ad0a4');
echo '<pre>';
var_dump($healthcare->Plans()->searchInsurancePlansStats([
    'year' => 2019
],json_decode('{
    "place": {
      "countyfips": "51107",
      "state": "VA",
      "zipcode": "20103"
    },
    "market": "Any",
    "filter": {
      "disease_mgmt_programs": [
        "Pain Management",
        "High Blood Pressure and High Cholesterol"
      ],
      "division": "Dental",
      "issuer": "proident occaecat sed",
      "issuers": [
        "aute elit irure nostrud amet",
        "nulla labore"
      ],
      "metal_levels": [
        "Silver",
        "Silver"
      ],
      "metal_level": "Gold",
      "premium": 48021002.12812731,
      "type": "HMO",
      "types": [
        "EPO",
        "HMO"
      ],
      "deductible": 55240280.28049317,
      "hsa": false,
      "oopc": "-13470224.042113096",
      "child_dental_coverage": false,
      "adult_dental_coverage": true,
      "drugs": [
        "6178566",
        "194295"
      ],
      "providers": [
        "2517064711",
        "7055410232"
      ],
      "quality_rating": "-60162000.35155159",
      "simple_choice": false,
      "premium_range": {
        "min": "-33113986.03334319",
        "max": "-39176424.04392558"
      },
      "deductible_range": {
        "min": "-50994448.00503386",
        "max": "-62684214.70006933"
      }
    },
    "household": {
      "income": 16106745.324259907,
      "unemployment_received": "None",
      "people": [
        {
          "age": 24,
          "dob": "12-12-2020",
          "has_mec": false,
          "is_parent": true,
          "is_pregnant": false,
          "pregnant_with": 91950208.02053279,
          "uses_tobacco": false,
          "last_tobacco_use_date": "12-12-2020",
          "gender": "Male",
          "utilization_level": "Medium",
          "relationship": {},
          "does_not_cohabitate": false,
          "aptc_eligible": false,
          "current_enrollment": {
            "plan_id": {
              "value": "<Error: Too many levels of nesting to fake this schema>"
            },
            "effective_date": "12-12-2020",
            "uses_tobacco": false
          }
        },
        {
          "age": "-55756964.083645366",
          "dob": "12-12-2020",
          "has_mec": false,
          "is_parent": false,
          "is_pregnant": false,
          "pregnant_with": 79854236.14225131,
          "uses_tobacco": false,
          "last_tobacco_use_date": "12-12-2020",
          "gender": "Male",
          "utilization_level": "High",
          "relationship": {},
          "does_not_cohabitate": true,
          "aptc_eligible": true,
          "current_enrollment": {
            "plan_id": {
              "value": "<Error: Too many levels of nesting to fake this schema>"
            },
            "effective_date": "12-12-2020",
            "uses_tobacco": true
          }
        }
      ],
      "has_married_couple": false,
      "effective_date": "12-12-2020"
    },
    "offset": "-63457035.80180224",
    "order": "asc",
    "sort": "quality_rating",
    "year": 2019,
    "aptc_override": 51621.83525548875,
    "csr_override": "LimitedCSR",
    "catastrophic_override": true,
    "suppressed_plan_ids": [
      "16039GJ5803639,06987IR9096639,16578TE7296943",
      "57878JA2611362,96871QR3702956,63900GZ8582612,42378DY7819486,55415NT5262332,14254CM1989156"
    ]
  }', true)));