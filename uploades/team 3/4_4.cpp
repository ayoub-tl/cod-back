#include<stdio.h>
#include<stdlib.h>


main(){
    int t[16],s=0,n=0;
    for(t[0]=0;t[0]<10;t[0]++)
        for(t[1]=0;t[1]<10;t[1]++)
            for(t[2]=0;t[2]<10;t[2]++)
                for(t[3]=0;t[3]<10;t[3]++){
                    s=t[0]+t[1]+t[2]+t[3];
                    for(t[4]=0;t[4]<10;t[4]++)
                        for(t[5]=0;t[5]<10;t[5]++)
                            for(t[6]=0;t[6]<10;t[6]++){
                                t[7]=s-t[4]-t[5]-t[6];
                                if(t[7]>9 || t[7]<0)continue;
                                for(t[8]=0;t[8]<10;t[8]++){
                                    t[12]=s-t[0]-t[4]-t[8];
                                    if(t[12]>9 || t[12]<0)continue;
                                    t[9]=s-t[3]-t[6]-t[12];
                                    if(t[9]>9 || t[9]<0)continue;
                                    for(t[10]=0;t[10]<10;t[10]++){
                                        t[11]=s-t[8]-t[9]-t[10];
                                        if(t[11]>9 || t[11]<0)continue;
                                        t[13]=s-t[1]-t[5]-t[9];
                                        if(t[13]>9 || t[13]<0)continue;
                                        t[14]=s-t[2]-t[6]-t[10];
                                        if(t[14]>9 || t[14]<0)continue;
                                        t[15]=s-t[3]-t[7]-t[11];
                                        if(t[15]>9 || t[15]<0)continue;
                                        if(s!=t[0]+t[5]+t[15]+t[10])continue;
                                        if(s!=t[12]+t[13]+t[15]+t[14])continue;
                                        n++;
                                    }



                                }
                            }
                        }
    printf("%d",n);

}

