;
; BIND data file for mes-b1.ephec-ti.be. zone
;
;$ORIGIN mes-b1.ephec-ti.be.
$TTL 604800
@       IN      SOA     ns.mes-b1.ephec-ti.be. a.schamroth.students.ephec.be. (
                        1           ; Serial
                        604800      ; Refresh
                        86400       ; Retry
                        2419200     ; Expire
                        604800 )    ; Negative Cache TTL

@          IN      NS      ns.mes-b1.ephec-ti.be.

ns          IN      A       51.178.45.190
@           IN      A       51.178.45.190

www         IN      A       51.178.45.190
b2b         IN      A       51.178.45.190
db          IN      A       51.178.45.190