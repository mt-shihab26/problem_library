#include <bits/stdc++.h>

using namespace std;

void test_case();

int main() {
    int t;
    scanf("%d", &t);
    while (t--) {
        test_case();
    }
    return 0;
}

void test_case() {
    int n;
    scanf("%d", &n);
    int x = 10;
    vector<int> a;
    while (n) {
        int r = n % x;
        if (r != 0) {
            a.push_back(r);
        }
        n -= r;
        x *= 10;
    }
    printf("%d\n", (int)a.size());
    for (int i : a) {
        printf("%d ", i);
    }
    printf("\n");
}
