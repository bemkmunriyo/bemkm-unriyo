public function up(): void
{
    Schema::create('lpjs', function (Blueprint $table) {

        $table->id();

        $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');

        $table->string('nama_kegiatan');

        $table->text('deskripsi')->nullable();

        $table->bigInteger('realisasi_anggaran')->nullable();

        $table->enum('status', [
            'menunggu',
            'disetujui',
            'revisi'
        ])->default('menunggu');

        $table->text('catatan')->nullable();

        $table->timestamps();
    });
}