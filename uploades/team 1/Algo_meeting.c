#include<stdio.h>

 main(){

    float khad_vitesse, wal_vitesse, dog_vitesse, distance,temps=0;
    int i=0;

    //printf("Khadidja vitesse: ");
    scanf("%f",&khad_vitesse);
   // printf("Walid vitesse: ");
    scanf("%f",&wal_vitesse);
   // printf("Dog vitesse: ");
    scanf("%f",&dog_vitesse);
   // printf("Distance: ");
    scanf("%f",&distance);

    float vitesse = khad_vitesse + wal_vitesse;

     while((vitesse*60)<=distance){
        temps = temps + 60;
        distance = distance - (vitesse*60);
        if(khad_vitesse != 0 ) khad_vitesse--;
        vitesse = khad_vitesse + wal_vitesse;
        i++;
     }

     temps = temps + (distance/vitesse);

     //printf("\n\n");
     //printf("Time: %.f \n",temps);
     //printf("Loops: %d \n",i);
     printf("%.f",temps*dog_vitesse);



 }
