<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

         \Schema::disableForeignKeyConstraints();
        $this->call([
            UserSeeder::class,
            CourtSeeder::class,
            AdjudicationDistrictSeeder::class,
            // AdjudicationCourtSeeder::class,
            // AdjudicationDocumentTypeSeeder::class,
            // AdjudicationHydroBoundaryTypeSeeder::class,
            // AdjudicationSectionStatusSeeder::class,
            AdjudicationSectionTypeSeeder::class,
            AdjudicationStatusSeeder::class,
            // AdjudicationSubsectionSeeder::class,
            // AmountCategorySeeder::class,
            // AttorneyListSeeder::class,
            // AttorneySeeder::class,
            BureauSeeder::class,
            // CitySeeder::class,
            // ClaimResolutionSeeder::class,
            // ClaimStatusSeeder::class,
            // ClaimTypeSeeder::class,
            // ContactAddressSeeder::class,
            // ContactEmailSeeder::class,
            // ContactTelephoneSeeder::class,
            // CountrySeeder::class,
            // DefendantDocumentsTypeSeeder::class,
            // DefendantTypeSeeder::class,
            // DocumentDefinitionSeeder::class,
            // FieldWorkSeeder::class,
            // FileLocationSeeder::class,
            // FlatRaterSeeder::class,
            // GisDuplicateSeeder::class,
            // GlobalDocumentTypeSeeder::class,
            // GrantSeeder::class,
            // HsRecommendationSeeder::class,
            // HydrographicDocumentTypeSeeder::class,
            // IrrigationSeeder::class,
            // PartyAliasTypeSeeder::class,
            // PartyInterestTypeSeeder::class,
            // PartyStatusSeeder::class,
            // PartyTypeSeeder::class,
            // PartyTypeSubtypeSeeder::class,
            // PermissionSeeder::class,
            // PodGlobalDocumentSeeder::class,
            // PouCommentSeeder::class,
            // PouGlobalDocumentSeeder::class,
            // PouStatusSeeder::class,
            // PouWaterRightSeeder::class,
            // SurfaceZoneSeeder::class,
            // abstractingDocumentTypeSeeder::class,
            // UseCodeSeeder::class,
            UserSettingSeeder::class,
            // WaterBasinSeeder::class,
            // WaterRightCommentCategorySeeder::class,
            // WaterRightGlobalDocumentSeeder::class,
            // WaterRightUseSeeder::class,
            // WaterSourceSeeder::class,
            // WatersStatusSeeder::class,
            WratsUserSeeder::class,
            // WaterRightSeeder::class,
            // NoUseSeeder::class,
            // HydrographicDocumentSeeder::class,
            // GlobalDocumentSeeder::class,
            // CountySeeder::class,
            // ClaimFieldCheckSeeder::class,
            // BasinUserSeeder::class,
            // AttorneyListingSeeder::class,
            // AttorneyAttorneyListSeeder::class,
            // AdjudicationSectionSeeder::class,
            // AdjudicationDocumentSeeder::class,
            AdjudicationSeeder::class,
            // AdjudicationXyDatumSeeder::class,
            // ProgramSeeder::class,
            // PartyAliasSeeder::class,
            // PartySeeder::class,
            // OwnerCommentSeeder::class,
            // GroundPodSeeder::class,
            // PodNameHistorySeeder::class,
            // WaterRightCommentSeeder::class,
            // PouNonIrrigationSeeder::class,
            // abstractingDocumentPouSeeder::class,
            // abstractingDocumentOwnerSeeder::class,
            // abstractingDocumentDetailSeeder::class,
            // AdjudicationDocumentProgramSeeder::class,
            // abstractingSeeder::class,
            // abstractingCommentSeeder::class,
            // ImportErrorSeeder::class,
            // GroundPodCommentSeeder::class,
            // EbidParcelSeeder::class,
            // DefendantDocumentSeeder::class,
            // DbFileSeeder::class,
            // ConditionCommentSeeder::class,
            // ConditionSeeder::class,
            // MissingPouirrSeeder::class,

            // PodSeeder::class,
            // PodCommentSeeder::class,
            // SurfacePodSeeder::class,
            // SubfilePartySeeder::class,
            // PodDbFileSeeder::class,
            // PodRightSeeder::class,
            // PodTypeSeeder::class,
            // PodUseSeeder::class,
            // PodWaterRightSeeder::class,

            // AddressSeeder::class,

            WratsUserApplicationHistorySeeder::class 
        ]);
        \Schema::enableForeignKeyConstraints();

     
    }
}
