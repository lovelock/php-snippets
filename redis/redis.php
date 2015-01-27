<?php
/*
 * Redis::REDIS_STRING - String
 * Redis::REDIS_SET - Set
 * Redis::REDIS_LIST - List
 * Redis::REDIS_ZSET - Sorted set
 * Redis::REDIS_HASH - Hash
 * Redis::REDIS_NOT_FOUND - Not found / other
 */
$redis = new Redis();
/*
 * connect
 * $redis->connect('127.0.0.1', 6379);
 * $redis->connect('127.0.0.1'); // port 6379 by default
 * $redis->connect('127.0.0.1', 6379, 2.5); // 2.5 sec timeout.
 * $redis->connect('/tmp/redis.sock'); // unix domain socket.
 * $redis->connect('127.0.0.1', 6379, 1, NULL, 100); // 1 sec timeout, 100ms
 * delay between reconnection attempts.
 */

/*
 * pconnect
 * $redis->pconnect('127.0.0.1', 6379);
 * $redis->pconnect('127.0.0.1'); // port 6379 by default - same connection
 * like before.
 * $redis->pconnect('127.0.0.1', 6379, 2.5); // 2.5 sec timeout and would be
 * another connection than the two before.
 * $redis->pconnect('127.0.0.1', 6379, 2.5, 'x'); // x is sent as persistent_id
 * and would be another connection the the three before.
 * $redis->pconnect('/tmp/redis.sock'); // unix domain socket - would be
 * another connection than the four before.
 */
$auth = $redis->auth('');
