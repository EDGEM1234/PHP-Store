#include <stdio.h>

int
main(void)
{
    int hist[100] = { 0 };
    char buf[1000];
    char *bp;
    int chr;
    int curlen = 0;

    printf("Enter text: ");
    fflush(stdout);

    fgets(buf,sizeof(buf),stdin);
    bp = buf;

    for (chr = *bp++;  chr != 0;  chr = *bp++) {
        if (chr == '\n')
            break;

        
        if (chr == ' ') {
            hist[curlen] += 1;
            curlen = 0;
        }

        
        else
            curlen += 1;
    }

    
    hist[curlen] += 1;

    for (curlen = 1;  curlen < sizeof(hist) / sizeof(hist[0]);  ++curlen) {
        int count = hist[curlen];
        if (count > 0)
            printf("%d - %d\n",curlen,count);
    }

    return 0;
}