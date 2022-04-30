// Josephus Permutation
// 5 kyu
// https://www.codewars.com/kata/5550d638a99ddb113e0000a2

function josephus(array $items, int $k, $pos = 0, $result = []): array {
    if (empty($items)) {
        return $result;
    }

    $pos = ($pos + $k - 1) % count($items);

    $result = array_merge(
        $result,
        array_splice($items, $pos, 1)
    );

    return josephus($items, $k, $pos, $result);
}