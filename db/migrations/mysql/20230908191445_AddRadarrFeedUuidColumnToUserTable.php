<?php declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AddRadarrFeedUuidColumnToUserTable extends AbstractMigration
{
    public function down() : void
    {
        $this->execute(
            <<<SQL
            ALTER TABLE user DROP COLUMN radarr_feed_uuid
            SQL,
        );
    }

    public function up() : void
    {
        $this->execute(
            <<<SQL
            ALTER TABLE user ADD COLUMN radarr_feed_uuid CHAR(36) DEFAULT NULL AFTER plex_scrobble_ratings
            SQL,
        );
    }
}
