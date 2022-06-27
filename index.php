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
    "market": "Individual",
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
      "oopc": 1,
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
      "quality_rating": 3,
      "simple_choice": false
    },
    "household": {
      "income": 16106745.324259907,
      "unemployment_received": "None",
      "people": [
        {
          "age": 24,
          "dob": "2006-01-02",
          "has_mec": false,
          "is_parent": true,
          "is_pregnant": false,
          "pregnant_with": 1,
          "uses_tobacco": false,
          "last_tobacco_use_date": "2006-01-02",
          "gender": "Male",
          "utilization_level": "Medium",
          "relationship": "spouse",
          "does_not_cohabitate": false,
          "aptc_eligible": false,
          "current_enrollment": {
            "plan_id": "11512NC0100031",
            "effective_date": "2006-01-02",
            "uses_tobacco": false
          }
        },
        {
          "age": 24,
          "dob": "2006-01-02",
          "has_mec": false,
          "is_parent": false,
          "is_pregnant": false,
          "pregnant_with": 1,
          "uses_tobacco": false,
          "last_tobacco_use_date": "2006-01-02",
          "gender": "Male",
          "utilization_level": "High",
          "relationship": "spouse",
          "does_not_cohabitate": true,
          "aptc_eligible": true,
          "current_enrollment": {
            "plan_id": "11512NC0100031",
            "effective_date": "2006-01-02",
            "uses_tobacco": true
          }
        }
      ],
      "has_married_couple": false,
      "effective_date": "2006-01-02"
    },
    "offset": 0,
    "order": "asc",
    "sort": "quality_rating",
    "year": 2019,
    "aptc_override": 51621.83525548875,
    "csr_override": "LimitedCSR",
    "catastrophic_override": true,
    "suppressed_plan_ids": [
    ]
  }', true)));