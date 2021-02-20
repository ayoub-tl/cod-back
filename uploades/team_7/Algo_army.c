 #include<stdio.h>

int verifie(int tab[],int n){
    int compt=0,i;
    for(i=0;i<n;i++){
        if(tab[i] == 1) compt++;
    }
    return compt;
}
 parcour(int tab[],int i,int n){
    if(i==n){
            i=0;
        }
    while(tab[i]!= 1){
        i++;
        if(i==n){
            i=0;

        }

    }
    return i;

 }
main(){
    int n,i,j;
    scanf("%d",&n);

    int tab[n];
    for(i=0;i<n;i++){
        tab[i] = 1;
    }

    i=0;
        while(i<n && verifie(tab,n) > 1) {

            if(tab[i] == 1){

                i = parcour(tab,i+1,n);
                tab[i] = 0;
            }

            i = parcour(tab,i+1,n);


    }

    i = parcour(tab,0,n)+1;
    printf("%d",i);
}
