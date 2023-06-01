<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Foundation\Resources\Source;

use SmartSender\Foundation\Factory;
use SmartSender\Foundation\Resources\Source\Messenger\ChatService;
use SmartSender\Foundation\Resources\Source\Messenger\FunnelService;
use SmartSender\Foundation\Resources\Source\Messenger\ChannelService;
use SmartSender\Foundation\Resources\Source\Messenger\MessageService;
use SmartSender\Foundation\Resources\Source\Messenger\OperatorService;

/**
 * Smart Sender Messenger factory.
 *
 * @property-read \SmartSender\Foundation\Resources\Source\Messenger\ChatService     $chats
 * @property-read \SmartSender\Foundation\Resources\Source\Messenger\FunnelService   $funnels
 * @property-read \SmartSender\Foundation\Resources\Source\Messenger\ChannelService  $channels
 * @property-read \SmartSender\Foundation\Resources\Source\Messenger\MessageService  $messages
 * @property-read \SmartSender\Foundation\Resources\Source\Messenger\OperatorService $operators
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class MessengerFactory extends Factory
{
    /**
     * @inheritDoc
     */
    protected function getServiceMap(): array
    {
        return [
            'chats' => ChatService::class,
            'funnels' => FunnelService::class,
            'channels' => ChannelService::class,
            'messages' => MessageService::class,
            'operators' => OperatorService::class,
        ];
    }
}
