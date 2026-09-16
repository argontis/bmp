CREATE TABLE IF NOT EXISTS "migrations"(
  "id" integer primary key autoincrement not null,
  "migration" varchar not null,
  "batch" integer not null
);
CREATE TABLE IF NOT EXISTS "users"(
  "id" integer primary key autoincrement not null,
  "name" varchar not null,
  "email" varchar not null,
  "email_verified_at" datetime,
  "password" varchar not null,
  "remember_token" varchar,
  "created_at" datetime,
  "updated_at" datetime,
  "is_admin" tinyint(1) not null default '0',
  "rfm_score" varchar,
  "total_donation" integer not null default '0'
);
CREATE UNIQUE INDEX "users_email_unique" on "users"("email");
CREATE TABLE IF NOT EXISTS "password_reset_tokens"(
  "email" varchar not null,
  "token" varchar not null,
  "created_at" datetime,
  primary key("email")
);
CREATE TABLE IF NOT EXISTS "sessions"(
  "id" varchar not null,
  "user_id" integer,
  "ip_address" varchar,
  "user_agent" text,
  "payload" text not null,
  "last_activity" integer not null,
  primary key("id")
);
CREATE INDEX "sessions_user_id_index" on "sessions"("user_id");
CREATE INDEX "sessions_last_activity_index" on "sessions"("last_activity");
CREATE TABLE IF NOT EXISTS "cache"(
  "key" varchar not null,
  "value" text not null,
  "expiration" integer not null,
  primary key("key")
);
CREATE INDEX "cache_expiration_index" on "cache"("expiration");
CREATE TABLE IF NOT EXISTS "cache_locks"(
  "key" varchar not null,
  "owner" varchar not null,
  "expiration" integer not null,
  primary key("key")
);
CREATE INDEX "cache_locks_expiration_index" on "cache_locks"("expiration");
CREATE TABLE IF NOT EXISTS "jobs"(
  "id" integer primary key autoincrement not null,
  "queue" varchar not null,
  "payload" text not null,
  "attempts" integer not null,
  "reserved_at" integer,
  "available_at" integer not null,
  "created_at" integer not null
);
CREATE INDEX "jobs_queue_index" on "jobs"("queue");
CREATE TABLE IF NOT EXISTS "job_batches"(
  "id" varchar not null,
  "name" varchar not null,
  "total_jobs" integer not null,
  "pending_jobs" integer not null,
  "failed_jobs" integer not null,
  "failed_job_ids" text not null,
  "options" text,
  "cancelled_at" integer,
  "created_at" integer not null,
  "finished_at" integer,
  primary key("id")
);
CREATE TABLE IF NOT EXISTS "failed_jobs"(
  "id" integer primary key autoincrement not null,
  "uuid" varchar not null,
  "connection" varchar not null,
  "queue" varchar not null,
  "payload" text not null,
  "exception" text not null,
  "failed_at" datetime not null default CURRENT_TIMESTAMP
);
CREATE INDEX "failed_jobs_connection_queue_failed_at_index" on "failed_jobs"(
  "connection",
  "queue",
  "failed_at"
);
CREATE UNIQUE INDEX "failed_jobs_uuid_unique" on "failed_jobs"("uuid");
CREATE TABLE IF NOT EXISTS "campaigns"(
  "id" integer primary key autoincrement not null,
  "name" varchar not null,
  "location" varchar not null,
  "nominal" integer not null default '0',
  "rfm_score" varchar not null,
  "status" varchar not null default 'Aktif',
  "created_at" datetime,
  "updated_at" datetime,
  "category" varchar,
  "image" varchar,
  "description" text,
  "label" varchar,
  "slug" varchar,
  "volunteer_target" integer not null default '0',
  "activity_date" date
);
CREATE TABLE IF NOT EXISTS "donations"(
  "id" integer primary key autoincrement not null,
  "user_id" integer not null,
  "campaign_id" integer not null,
  "amount" integer not null,
  "payment_method" varchar,
  "status" varchar not null default 'Berhasil',
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("user_id") references "users"("id") on delete cascade,
  foreign key("campaign_id") references "campaigns"("id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "pengeluarans"(
  "id" integer primary key autoincrement not null,
  "nama_pengeluaran" varchar not null,
  "lokasi" varchar not null,
  "jumlah" integer not null,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "newsletter_subscribers"(
  "id" integer primary key autoincrement not null,
  "email" varchar not null,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE UNIQUE INDEX "newsletter_subscribers_email_unique" on "newsletter_subscribers"(
  "email"
);
CREATE TABLE IF NOT EXISTS "galleries"(
  "id" integer primary key autoincrement not null,
  "image" varchar not null,
  "title" varchar not null,
  "category" varchar not null,
  "created_at" datetime,
  "updated_at" datetime,
  "description" text
);
CREATE TABLE IF NOT EXISTS "volunteers"(
  "id" integer primary key autoincrement not null,
  "name" varchar not null,
  "email" varchar not null,
  "phone" varchar not null,
  "role" varchar not null,
  "motivation" text not null,
  "status" varchar not null default('Menunggu'),
  "created_at" datetime,
  "updated_at" datetime,
  "campaign_id" integer,
  foreign key("campaign_id") references "campaigns"("id") on delete set null
);
CREATE TABLE IF NOT EXISTS "articles"(
  "id" integer primary key autoincrement not null,
  "title" varchar not null,
  "slug" varchar not null,
  "content" text not null,
  "image" varchar,
  "status" varchar not null default 'draft',
  "published_at" datetime,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE UNIQUE INDEX "articles_slug_unique" on "articles"("slug");

INSERT INTO migrations VALUES(1,'0001_01_01_000000_create_users_table',1);
INSERT INTO migrations VALUES(2,'0001_01_01_000001_create_cache_table',1);
INSERT INTO migrations VALUES(3,'0001_01_01_000002_create_jobs_table',1);
INSERT INTO migrations VALUES(4,'2026_09_10_024717_add_is_admin_to_users_table',1);
INSERT INTO migrations VALUES(5,'2026_09_10_024729_create_campaigns_table',1);
INSERT INTO migrations VALUES(6,'2026_09_10_030310_add_rfm_to_users_table',1);
INSERT INTO migrations VALUES(7,'2026_09_10_030638_create_donations_table',1);
INSERT INTO migrations VALUES(8,'2026_09_10_101519_create_pengeluarans_table',1);
INSERT INTO migrations VALUES(9,'2026_09_11_084335_add_explore_columns_to_campaigns_table',1);
INSERT INTO migrations VALUES(10,'2026_09_15_065944_create_newsletter_subscribers_table',2);
INSERT INTO migrations VALUES(11,'2026_09_15_071452_create_volunteers_table',3);
INSERT INTO migrations VALUES(12,'2026_09_15_073721_create_galleries_table',4);
INSERT INTO migrations VALUES(13,'2026_09_15_074637_add_volunteer_target_to_campaigns_table',5);
INSERT INTO migrations VALUES(14,'2026_09_15_074638_add_campaign_id_to_volunteers_table',5);
INSERT INTO migrations VALUES(15,'2026_09_15_084724_create_articles_table',6);
INSERT INTO migrations VALUES(16,'2026_09_15_090041_add_category_description_to_galleries_table',7);
INSERT INTO migrations VALUES(17,'2026_09_16_020321_add_image_to_kegiatans_table',8);
INSERT INTO migrations VALUES(18,'2026_09_16_072648_add_activity_date_to_campaigns_table',8);
