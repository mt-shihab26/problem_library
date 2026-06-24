#include <bits/stdc++.h>

using namespace std;

void test_case();

int main() {
    ios_base::sync_with_stdio(false);

    cin.tie(nullptr);

    cerr << boolalpha;
    cout << boolalpha;

    int t;
    cin >> t;
    while (t--) {
        test_case();
    }

    return 0;
}

void test_case() {
    int n, t, zero_count = 0, negative_count = 0;
    cin >> n;
    for (int i = 0; i < n; i++) {
        cin >> t;
        if (t == 0) {
            zero_count++;
        } else if (t == -1) {
            negative_count++;
        }
    }
    int r = zero_count;
    r += ((negative_count % 2) * 2);
    cout << r << "\n";
}
