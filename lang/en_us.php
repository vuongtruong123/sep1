<?php
/**
 * Copyright 2011-2019 Nick Korbel
 *
 * This file is part of Booked Scheduler.
 *
 * Booked Scheduler is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Booked Scheduler is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once('Language.php');

class en_us extends Language
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * @return array
	 */
	protected function _LoadDates()
	{
		$dates = array();

		$dates['general_date'] = 'm/d/Y';
		$dates['general_datetime'] = 'm/d/Y g:i:s A';
		$dates['short_datetime'] = 'n/j/y g:i A';
		$dates['schedule_daily'] = 'l, n/j/y';
		$dates['reservation_email'] = 'm/d/Y @ g:i A (e)';
		$dates['res_popup'] = 'D, n/d g:i A';
		$dates['res_popup_time'] = 'g:i A';
		$dates['short_reservation_date'] = 'n/j/y g:i A';
		$dates['dashboard'] = 'D, n/d g:i A';
		$dates['period_time'] = 'g:i A';
		$dates['timepicker'] = 'h:i a';
		$dates['mobile_reservation_date'] = 'n/j g:i A';
		$dates['general_date_js'] = 'mm/dd/yy';
        $dates['general_time_js'] = 'h:mm tt';
        $dates['timepicker_js'] = 'h:i a';
        $dates['momentjs_datetime'] = 'M/D/YY h:mm A';
		$dates['calendar_time'] = 'h:mmt';
		$dates['calendar_dates'] = 'M d';
		$dates['embedded_date'] = 'D d';
		$dates['embedded_time'] = 'g:i A';
		$dates['embedded_datetime'] = 'n/j g:i A';
		$dates['report_date'] = '%m/%d';

		$this->Dates = $dates;

		return $this->Dates;
	}

	/**
	 * @return array
	 */
	protected function _LoadStrings()
	{
		$strings = array();

		$strings['FirstName'] = 'Họ';
		$strings['LastName'] = 'Tên';
		$strings['Timezone'] = 'Múi Giờ';
		$strings['Edit'] = 'Chỉnh Sửa';
		$strings['Change'] = 'Thay Đổi';
		$strings['Rename'] = 'Đổi tên';
		$strings['Remove'] = 'Xóa bỏ';
		$strings['Delete'] = 'Xóa';
		$strings['Update'] = 'Cập nhật';
		$strings['Cancel'] = 'Hủy';
		$strings['Add'] = 'Thêm';
		$strings['Name'] = 'Tên';
		$strings['Yes'] = 'Yes';
		$strings['No'] = 'No';
		$strings['FirstNameRequired'] = 'Yêu cầu phải có Họ.';
		$strings['LastNameRequired'] = 'Yêu cầu phải có Tên.';
		$strings['PwMustMatch'] = 'Mật khẩu xác nhận phải trùng với mật khẩu vừa đánh.';
		$strings['ValidEmailRequired'] = 'Yêu cầu phải có địa chỉ e-mail tồn tại để xác thực.';
		$strings['UniqueEmailRequired'] = 'Địa chỉ E-mail đã được đăng ký.';
		$strings['UniqueUsernameRequired'] = 'Tên đăng nhập đã được đăng ký.';
		$strings['UserNameRequired'] = 'Yêu cầu phải có username.';
		$strings['CaptchaMustMatch'] = 'Vui lòng đền đúng những ký tự mà bạn thấy dưới ảnh.';
		$strings['Today'] = 'Ngày hôm nay';
		$strings['Week'] = 'Tuần';
		$strings['Month'] = 'Tháng';
		$strings['BackToCalendar'] = 'Quay trở lại Lịch';
		$strings['BeginDate'] = 'Bắt đầu';
		$strings['EndDate'] = 'Kết thúc';
		$strings['Username'] = 'Tên đăng nhập';
		$strings['Password'] = 'Mật khẩu';
		$strings['PasswordConfirmation'] = 'Xác nhận mật khẩu';
		$strings['DefaultPage'] = 'Trang chủ mặc định';
		$strings['MyCalendar'] = 'Lịch của tôi';
		$strings['ScheduleCalendar'] = 'Lịch';
		$strings['Registration'] = 'Đăng Ký';
		$strings['NoAnnouncements'] = 'Không có thông báo mới';
		$strings['Announcements'] = 'Thông Báo';
		$strings['NoUpcomingReservations'] = 'Sắp tới, Bạn không có lịch đặt phòng nào.';
		$strings['UpcomingReservations'] = 'Đặt phòng sắp tới';
		$strings['AllNoUpcomingReservations'] = 'Không có lịch họp nào đến %s ngày tiếp theo';
		$strings['AllUpcomingReservations'] = 'Tất cả lịch đặt phòng sắp tới';
		$strings['ShowHide'] = 'Hiện/Ẩn';
		$strings['Error'] = 'Lỗi !';
		$strings['ReturnToPreviousPage'] = 'Quay lại trang cuối cùng mà bạn đã truy cập';
		$strings['UnknownError'] = 'Lỗi chưa xác định';
		$strings['InsufficientPermissionsError'] = 'Lỗi ! Bạn phải đăng nhập vào hệ thống để có thể đặt phòng';
		$strings['MissingReservationResourceError'] = 'Một tài nguyên đã không được chọn';
		$strings['MissingReservationScheduleError'] = 'Một lịch trình đã không được chọn';
		$strings['DoesNotRepeat'] = 'Không lặp lại';
		$strings['Daily'] = 'Hàng ngày';
		$strings['Weekly'] = 'Hàng Tuần';
		$strings['Monthly'] = 'Hàng Tháng';
		$strings['Yearly'] = 'Hàng Năm';
		$strings['RepeatPrompt'] = 'Lặp lại';
		$strings['hours'] = 'Giờ';
		$strings['days'] = 'Ngày';
		$strings['weeks'] = 'Tuần';
		$strings['months'] = 'Tháng';
		$strings['years'] = 'Năm';
		$strings['day'] = 'Ngày';
		$strings['week'] = 'Tuần';
		$strings['month'] = 'Tháng';
		$strings['year'] = 'Năm';
		$strings['repeatDayOfMonth'] = 'Ngày trong tháng';
		$strings['repeatDayOfWeek'] = 'Ngày trong tuần';
		$strings['RepeatUntilPrompt'] = 'Cho đến khi';
		$strings['RepeatEveryPrompt'] = 'Every';
		$strings['RepeatDaysPrompt'] = 'On';
		$strings['CreateReservationHeading'] = 'Đặt phòng mới';
		$strings['EditReservationHeading'] = 'Sửa lịch họp %s';
		$strings['ViewReservationHeading'] = 'Xem Lịch họp %s';
		$strings['ReservationErrors'] = 'Đổi đặt phòng';
		$strings['Create'] = 'Tạo mới';
		$strings['ThisInstance'] = 'Chỉ trường hợp này';
		$strings['AllInstances'] = 'Tất cả các trường hợp';
		$strings['FutureInstances'] = 'Trường hợp tương lai';
		$strings['Print'] = 'In';
		$strings['ShowHideNavigation'] = 'Hiển thị/Ẩn điều hướng';
		$strings['ReferenceNumber'] = 'Số tham chiếu';
		$strings['Tomorrow'] = 'Ngày Mai';
		$strings['LaterThisWeek'] = 'Cuối tuần này';
		$strings['NextWeek'] = 'Tuần tới';
		$strings['SignOut'] = 'Đăng xuất';
		$strings['LayoutDescription'] = 'Bắt đầu vào %s, hiển thị %s ngày tại một thời điểm';
		$strings['AllResources'] = 'Tất cả lịch họp';
		$strings['TakeOffline'] = 'Gặp trực tiếp';
		$strings['BringOnline'] = 'Mang trực tuyến';
		$strings['AddImage'] = 'Thêm Ảnh';
		$strings['NoImage'] = 'Không có hình ảnh được chỉ định';
		$strings['Move'] = 'Di Chuyển đi...';
		$strings['AppearsOn'] = 'Xuất hiện trên %s';
		$strings['Location'] = 'Vị trí';
		$strings['NoLocationLabel'] = '(Vị trí chưa được cài đặt)';
		$strings['Contact'] = 'Liên Hệ';
		$strings['NoContactLabel'] = '(Không có thông tin liên hệ)';
		$strings['Description'] = 'Miêu tả ngắn';
		$strings['NoDescriptionLabel'] = '(Không có miêu tả ngắn)';
		$strings['Notes'] = 'Ghi Chú';
		$strings['NoNotesLabel'] = '(Không có ghi chú nào)';
		$strings['NoTitleLabel'] = '(Không có tiêu đề)';
		$strings['UsageConfiguration'] = 'Sử dụng cấu hình này';
		$strings['ChangeConfiguration'] = 'Thay đổi cấu hình';
		$strings['ResourceMinLength'] = 'Đặt phòng phải kéo dài ít nhất %s';
		$strings['ResourceMinLengthNone'] = 'Không có thời gian đặt phòng tối thiểu';
		$strings['ResourceMaxLength'] = 'Đặt phòng không thể kéo dài hơn %s';
		$strings['ResourceMaxLengthNone'] = 'Không có thời hạn đặt phòng tối đa';
		$strings['ResourceRequiresApproval'] = 'Đặt phòng phải được phê duyệt';
		$strings['ResourceRequiresApprovalNone'] = 'Đặt phòng không yêu cầu phê duyệt';
		$strings['ResourcePermissionAutoGranted'] = 'Quyền được tự động cấp';
		$strings['ResourcePermissionNotAutoGranted'] = 'Quyền không được tự động cấp';
		$strings['ResourceMinNotice'] = 'Đặt phòng phải được thực hiện ít nhất %s trước thời gian bắt đầu';
		$strings['ResourceMinNoticeNone'] = 'Đặt phòng có thể được thực hiện cho đến thời điểm hiện tại';
		$strings['ResourceMinNoticeUpdate'] = 'Đặt phòng phải được cập nhật ít nhất %s trước thời gian bắt đầu';
		$strings['ResourceMinNoticeNoneUpdate'] = 'Đặt phòng có thể được cập nhật cho đến thời điểm hiện tại';
		$strings['ResourceMinNoticeDelete'] = 'Đặt phòng phải được xóa ít nhất %s trước thời gian bắt đầu';
		$strings['ResourceMinNoticeNoneDelete'] = 'Đặt phòng có thể bị xóa cho đến thời điểm hiện tại';
		$strings['ResourceMaxNotice'] = 'Đặt phòng không được kết thúc nhiều hơn %s từ thời điểm hiện tại';
		$strings['ResourceMaxNoticeNone'] = 'Đặt phòng có thể kết thúc tại bất kỳ thời điểm nào trong tương lai';
		$strings['ResourceBufferTime'] = 'Phải có %s giữa các đặt phòng';
		$strings['ResourceBufferTimeNone'] = 'Không có bộ đệm giữa các đặt phòng';
		$strings['ResourceAllowMultiDay'] = 'Đặt phòng có thể được thực hiện trong nhiều ngày';
		$strings['ResourceNotAllowMultiDay'] = 'Đặt phòng không thể được thực hiện trong nhiều ngày';
		$strings['ResourceCapacity'] = 'Tài nguyên này có khả năng %s những người';
		$strings['ResourceCapacityNone'] = 'Tài nguyên này có khả năng không giới hạn';
		$strings['AddNewResource'] = 'Tạo lịch họp mới';
		$strings['AddNewUser'] = 'Thêm Người dùng mới';
		$strings['AddResource'] = 'Thêm tài nguyên';
		$strings['Capacity'] = 'Sức chứa';
		$strings['Access'] = 'Truy cập';
		$strings['Duration'] = 'Thời lượng';
		$strings['Active'] = 'Kích hoạt';
		$strings['Inactive'] = 'Bỏ kích hoạt';
		$strings['ResetPassword'] = 'Khôi phục mật khẩu';
		$strings['LastLogin'] = 'Lần đăng nhập trước';
		$strings['Search'] = 'Tìm kiếm';
		$strings['ResourcePermissions'] = 'Quyền tài nguyên';
		$strings['Reservations'] = 'Đặt phòng';
		$strings['Groups'] = 'Nhóm';
		$strings['Users'] = 'Người sử dụng';
		$strings['AllUsers'] = 'Tất cả người sử dụng';
		$strings['AllGroups'] = 'Tất cả các nhóm';
		$strings['AllSchedules'] = 'Tất cả các lịch họp';
		$strings['UsernameOrEmail'] = 'Tên đăng nhập hoặc Email';
		$strings['Members'] = 'Thành viên';
		$strings['QuickSlotCreation'] = 'Tạo các khe mỗi %s phút giữa %s và %s';
		$strings['ApplyUpdatesTo'] = 'Áp dụng cập nhật đến..';
		$strings['CancelParticipation'] = 'Hủy những người sẽ tham gia họp';
		$strings['Attending'] = 'Attending';
		$strings['QuotaConfiguration'] = 'Trên %s cho %s người dùng trong %s được giới hạn %s %s mỗi %s';
		$strings['QuotaEnforcement'] = 'Cưỡng chế %s %s';
		$strings['reservations'] = 'đặt phòng';
		$strings['reservation'] = 'đặt phòng';
		$strings['ChangeCalendar'] = 'Đổi Lịch';
		$strings['AddQuota'] = 'Thêm định mức';
		$strings['FindUser'] = 'Tìm người dùng';
		$strings['Created'] = 'Đã tạo';
		$strings['LastModified'] = 'Lần thay đổi gần đây';
		$strings['GroupName'] = 'Tên Nhóm';
		$strings['GroupMembers'] = 'Thành Viên Nhóm';
		$strings['GroupRoles'] = 'Vai trò nhóm';
		$strings['GroupAdmin'] = 'Quản trị viên Nhóm';
		$strings['Actions'] = 'Hành động';
		$strings['CurrentPassword'] = 'Mật khẩu hiện tại';
		$strings['NewPassword'] = 'Mật khẩu mới';
		$strings['InvalidPassword'] = 'Mật khẩu hiện tại không đúng';
		$strings['PasswordChangedSuccessfully'] = 'Mật khẩu đã được đổi thành công';
		$strings['SignedInAs'] = 'Signed in as';
		$strings['NotSignedIn'] = 'Bạn chưa đăng nhập...';
		$strings['ReservationTitle'] = 'Tiêu đề cuộc họp';
		$strings['ReservationDescription'] = 'Mô tả ngắn về cuộc họp';
		$strings['ResourceList'] = 'Resources to be reserved';
		$strings['Accessories'] = 'Trang thiết bị cần cho cuộc họp:';
		$strings['InvitationList'] = 'Mời họp';
		$strings['AccessoryName'] = 'Thiết bị/Phụ kiện..';
		$strings['QuantityAvailable'] = 'Số lượng hiện có: ';
		$strings['Resources'] = 'Phòng họp: ';
		$strings['Participants'] = 'Người tham gia';
		$strings['User'] = 'Người dùng';
		$strings['Resource'] = 'Nguồn';
		$strings['Status'] = 'Trạng thái';
		$strings['Approve'] = 'Phê Duyệt';
		$strings['Page'] = 'Trang..';
		$strings['Rows'] = 'Dòng..';
		$strings['Unlimited'] = 'Không giới hạn';
		$strings['Email'] = 'Email';
		$strings['EmailAddress'] = 'Địa chỉ E-mail';
		$strings['Phone'] = 'Số điện thoại';
		$strings['Organization'] = 'Phòng Ban';
		$strings['Position'] = 'Vị Trí';
		$strings['Language'] = 'Ngôn Ngữ';
		$strings['Permissions'] = 'Permissions';
		$strings['Reset'] = 'Đặt lại';
		$strings['FindGroup'] = 'Tìm nhóm';
		$strings['Manage'] = 'Manage';
		$strings['None'] = 'Rỗng';
		$strings['AddToOutlook'] = 'Add to Calendar';
		$strings['Done'] = 'Done';
		$strings['RememberMe'] = 'Ghi nhớ đăng nhập';
		$strings['FirstTimeUser?'] = 'Đây là lần đầu tiên bạn sử dụng hệ thống ?';
		$strings['CreateAnAccount'] = 'Tạo một tài khoản mới';
		$strings['ViewSchedule'] = 'Xem Lịch Họp';
		$strings['ForgotMyPassword'] = 'Tôi quên mật khẩu..';
		$strings['YouWillBeEmailedANewPassword'] = 'Hệ thống sẽ tự động gửi mật khẩu vào e-mail cho bạn.';
		$strings['Close'] = 'Đóng';
		$strings['ExportToCSV'] = 'Xuất file sang CSV';
		$strings['OK'] = 'OK';
		$strings['Working'] = 'Working...';
		$strings['Login'] = 'Đăng Nhập';
		$strings['AdditionalInformation'] = 'Thông tin thêm';
		$strings['AllFieldsAreRequired'] = 'all fields are required';
		$strings['Optional'] = 'Tùy Chọn';
		$strings['YourProfileWasUpdated'] = 'Hồ sơ của bạn đã được cập nhật';
		$strings['YourSettingsWereUpdated'] = 'Cấu hình của bạn đã được cập nhật';
		$strings['Register'] = 'Đăng ký';
		$strings['SecurityCode'] = 'Mã bảo mật';
		$strings['ReservationCreatedPreference'] = 'Khi tôi tạo một đặt phòng hoặc một đặt phòng được tạo ra thay mặt tôi';
		$strings['ReservationUpdatedPreference'] = 'Khi tôi tạo một đặt phòng hoặc một đặt phòng được tạo ra thay mặt tôi';
		$strings['ReservationDeletedPreference'] = 'Khi tôi tạo một đặt phòng hoặc một đặt phòng được tạo ra thay mặt tôi';
		$strings['ReservationApprovalPreference'] = 'Khi đặt phòng chờ xử lý của tôi được phê duyệt';
		$strings['PreferenceSendEmail'] = 'Gửi E-mail cho tôi';
		$strings['PreferenceNoEmail'] = 'Không gửi thông báo cho tôi';
		$strings['ReservationCreated'] = 'Đặt phòng của bạn đã được tạo thành công!';
		$strings['ReservationUpdated'] = 'Đặt phòng của bạn đã được tạo thành công!';
		$strings['ReservationRemoved'] = 'Đặt phòng của bạn đã bị xóa';
		$strings['ReservationRequiresApproval'] = 'Một hoặc nhiều tài nguyên được bảo lưu yêu cầu phê duyệt trước khi sử dụng. Đặt phòng này sẽ chờ xử lý cho đến khi được phê duyệt.';
		$strings['YourReferenceNumber'] = 'Số tham chiếu của bạn là %s';
		$strings['ChangeUser'] = 'Thay đổi người sử dụng';
		$strings['MoreResources'] = 'Nhiêu tai nguyên hơn';
		$strings['ReservationLength'] = 'Thời gian họp là: ';
		$strings['ParticipantList'] = 'Danh sách người tham dự họp:';
		$strings['AddParticipants'] = 'Thêm người tham dự';
		$strings['InviteOthers'] = 'Thêm người họp khác:';
		$strings['AddResources'] = 'Tất cả các phòng họp:';
		$strings['AddAccessories'] = 'Thêm trang thiết bị:';
		$strings['Accessory'] = 'Trang/thiết bị';
		$strings['QuantityRequested'] = 'Số lượng yêu cầu';
		$strings['CreatingReservation'] = 'Tạo cuộc họp mới';
		$strings['UpdatingReservation'] = 'Cập nhật thông tin cuộc họp';
		$strings['DeleteWarning'] = 'Hành động này là vĩnh viễn và không thể phục hồi!';
		$strings['DeleteAccessoryWarning'] = 'Xóa phụ kiện này sẽ xóa nó khỏi tất cả các đặt phòng.';
		$strings['AddAccessory'] = 'Thêm phụ kiện';
		$strings['AddBlackout'] = 'Add Blackout';
		$strings['AllResourcesOn'] = 'Tất cả tài nguyên trên';
		$strings['Reason'] = 'Lý do';
		$strings['BlackoutShowMe'] = 'Hiện lịch họp bị trùng giờ';
		$strings['BlackoutDeleteConflicts'] = 'Xóa lịch họp bị trùng giờ';
		$strings['Filter'] = 'Tìm kiếm';
		$strings['Between'] = 'Giữa';
		$strings['CreatedBy'] = 'Được tạo bởi';
		$strings['BlackoutCreated'] = 'Mất điện';
		$strings['BlackoutNotCreated'] = 'Mất điện không thể được tạo ra';
		$strings['BlackoutUpdated'] = 'Cập nhật mất điện';
		$strings['BlackoutNotUpdated'] = 'Mất điện không thể cập nhật';
		$strings['BlackoutConflicts'] = 'Có những lần mất điện xung đột';
		$strings['ReservationConflicts'] = 'Có thời gian đặt phòng xung đột';
		$strings['UsersInGroup'] = 'Người dùng trong nhóm này';
		$strings['Browse'] = 'Duyệt';
		$strings['DeleteGroupWarning'] = 'Xóa nhóm này sẽ xóa tất cả các quyền tài nguyên liên quan. Người dùng trong nhóm này có thể mất quyền truy cập vào tài nguyên.';
		$strings['WhatRolesApplyToThisGroup'] = 'Những vai trò nào áp dụng cho nhóm này?';
		$strings['WhoCanManageThisGroup'] = 'Ai có thể quản lý nhóm này?';
		$strings['WhoCanManageThisSchedule'] = 'Ai có thể quản lý lịch trình này?';
		$strings['AllQuotas'] = 'Tất cả hạn ngạch';
		$strings['QuotaReminder'] = 'Hãy nhớ rằng: Hạn ngạch được thi hành dựa trên lịch trình\'s múi giờ.';
		$strings['AllReservations'] = 'Tất cả các đặt phòng';
		$strings['PendingReservations'] = 'Đang chờ đặt trước';
		$strings['Approving'] = 'Phê duyệt';
		$strings['MoveToSchedule'] = 'Di chuyển đến lịch trình';
		$strings['DeleteResourceWarning'] = 'Xóa tài nguyên này sẽ xóa tất cả dữ liệu liên quan, bao gồm';
		$strings['DeleteResourceWarningReservations'] = 'tất cả các đặt phòng trong quá khứ, hiện tại và tương lai liên quan đến nó';
		$strings['DeleteResourceWarningPermissions'] = 'tất cả các bài tập cho phép';
		$strings['DeleteResourceWarningReassign'] = 'Vui lòng chỉ định lại bất cứ điều gì bạn không muốn bị xóa trước khi tiếp tục';
		$strings['ScheduleLayout'] = 'Layout (all times %s)';
		$strings['ReservableTimeSlots'] = 'Thời gian dự trữ';
		$strings['BlockedTimeSlots'] = 'Thời gian bị chặn';
		$strings['ThisIsTheDefaultSchedule'] = 'Đây là lịch trình mặc định';
		$strings['DefaultScheduleCannotBeDeleted'] = 'Lịch trình mặc định không thể bị xóa';
		$strings['MakeDefault'] = 'Đặt làm mặc định';
		$strings['BringDown'] = 'Mang xuống';
		$strings['ChangeLayout'] = 'Thay đổi bố cục';
		$strings['AddSchedule'] = 'Thêm lịch trình';
		$strings['StartsOn'] = 'Bắt đầu';
		$strings['NumberOfDaysVisible'] = 'Số ngày có thể nhìn thấy';
		$strings['UseSameLayoutAs'] = 'Sử dụng cùng bố cục như';
		$strings['Format'] = 'Định dạng';
		$strings['OptionalLabel'] = 'Nhãn tùy chọn';
		$strings['LayoutInstructions'] = 'Nhập một khe trên mỗi dòng. Các khe phải được cung cấp cho tất cả 24 giờ trong ngày bắt đầu và kết thúc lúc 12:00 AM.';
		$strings['AddUser'] = 'Thêm người dùng';
		$strings['UserPermissionInfo'] = 'Quyền truy cập thực tế vào tài nguyên có thể khác nhau tùy thuộc vào vai trò người dùng, quyền của nhóm hoặc cài đặt quyền bên ngoàis';
		$strings['DeleteUserWarning'] = 'Xóa người dùng này sẽ xóa tất cả các đặt phòng hiện tại, tương lai và lịch sử của họ.';
		$strings['AddAnnouncement'] = 'Thêm thông báo';
		$strings['Announcement'] = 'Thông Báo';
		$strings['Priority'] = 'Ưu tiên';
		$strings['Reservable'] = 'Phòng Trống';
		$strings['Unreservable'] = 'Khóa Phòng';
		$strings['Reserved'] = 'Đã đặt phòng';
		$strings['MyReservation'] = 'Lịch họp của tôi';
		$strings['Pending'] = 'Đang chờ';
		$strings['Past'] = 'Thời gian đã qua';
		$strings['Restricted'] = 'Cấm';
		$strings['ViewAll'] = 'Xem tất cả';
		$strings['MoveResourcesAndReservations'] = 'Di chuyển tài nguyên và đặt chỗ đến';
		$strings['TurnOffSubscription'] = 'Ẩn khỏi công chúng';
		$strings['TurnOnSubscription'] = 'Hiển thị cho công chúng (RSS, iCalendar)';
		$strings['SubscribeToCalendar'] = 'Theo dõi Lịch này';
		$strings['SubscriptionsAreDisabled'] = 'Quản trị viên đã vô hiệu hóa đăng ký lịch';
		$strings['NoResourceAdministratorLabel'] = '(Không có quản trị viên tài nguyên)';
		$strings['WhoCanManageThisResource'] = 'Ai có thể quản lý tài nguyên này?';
		$strings['ResourceAdministrator'] = 'Quản trị viên tài nguyên';
		$strings['Private'] = 'Riêng Tư';
		$strings['Accept'] = 'Cho phép';
		$strings['Decline'] = 'Từ chối';
		$strings['ShowFullWeek'] = 'Xem lịch họp cả tuần';
		$strings['CustomAttributes'] = 'Thuộc tính tùy chỉnh';
		$strings['AddAttribute'] = 'Add an Attribute';
		$strings['EditAttribute'] = 'Cập nhật một thuộc tính';
		$strings['DisplayLabel'] = 'Nhãn hiển thị';
		$strings['Type'] = 'Kiểu';
		$strings['Required'] = 'Cần thiết';
		$strings['ValidationExpression'] = 'Biểu thức xác nhận';
		$strings['PossibleValues'] = 'Những giá trị khả thi';
		$strings['SingleLineTextbox'] = 'Hộp văn bản một dòng';
		$strings['MultiLineTextbox'] = 'Hộp văn bản nhiều dòng';
		$strings['Checkbox'] = 'Checkbox';
		$strings['SelectList'] = 'Chọn danh sách';
		$strings['CommaSeparated'] = 'dấu phẩy phân tách';
		$strings['Category'] = 'Thể loại';
		$strings['CategoryReservation'] = 'Đặt chỗ';
		$strings['CategoryGroup'] = 'Nhóm';
		$strings['SortOrder'] = 'Sort Order';
		$strings['Title'] = 'Chức vụ';
		$strings['AdditionalAttributes'] = 'Thuộc tính bổ sung';
		$strings['True'] = 'Đúng';
		$strings['False'] = 'Sai';
		$strings['ForgotPasswordEmailSent'] = 'Một email đã được gửi đến địa chỉ được cung cấp với các hướng dẫn để đặt lại mật khẩu của bạn';
		$strings['ActivationEmailSent'] = 'Bạn sẽ nhận được một email kích hoạt sớm.';
		$strings['AccountActivationError'] = 'Xin lỗi, chúng tôi không thể kích hoạt tài khoản của bạn.';
		$strings['Attachments'] = 'Tài liệu đính kèm';
		$strings['AttachFile'] = 'Đính kèm tập tin';
		$strings['Maximum'] = 'tối đa';
		$strings['NoScheduleAdministratorLabel'] = 'Không có quản trị viên lịch trình';
		$strings['ScheduleAdministrator'] = 'Quản trị viên lịch trình';
		$strings['Total'] = 'Toàn bộ';
		$strings['QuantityReserved'] = 'Số lượng dự trữ';
		$strings['AllAccessories'] = 'Tất cả phụ kiện';
		$strings['GetReport'] = 'Nhận báo cáo';
		$strings['NoResultsFound'] = 'Không tìm thấy kết quả phù hợp';
		$strings['SaveThisReport'] = 'Lưu báo cáo này';
		$strings['ReportSaved'] = 'Báo cáo đã lưu!';
		$strings['EmailReport'] = 'Báo cáo qua email';
		$strings['ReportSent'] = 'Báo cáo đã gửi!';
		$strings['RunReport'] = 'Chạy báo cáo';
		$strings['NoSavedReports'] = 'Bạn không có báo cáo lưu.';
		$strings['CurrentWeek'] = 'Tuần này';
		$strings['CurrentMonth'] = 'Tháng này';
		$strings['AllTime'] = 'Mọi lúc';
		$strings['FilterBy'] = 'Lọc bởi';
		$strings['Select'] = 'Lựa chọn';
		$strings['List'] = 'Danh sách';
		$strings['TotalTime'] = 'Tổng thời gian';
		$strings['Count'] = 'Đếm';
		$strings['Usage'] = 'Sử dụng';
		$strings['AggregateBy'] = 'Tổng hợp bởi';
		$strings['Range'] = 'Phạm vi';
		$strings['Choose'] = 'Chọn';
		$strings['All'] = 'Cơ sở';
		$strings['ViewAsChart'] = 'Xem dưới dạng biểu đồ';
		$strings['ReservedResources'] = 'Tài nguyên dự trữ';
		$strings['ReservedAccessories'] = 'Phụ kiện dành riêng';
		$strings['ResourceUsageTimeBooked'] = 'Sử dụng tài nguyên - Thời gian đặt trước';
		$strings['ResourceUsageReservationCount'] = 'Sử dụng tài nguyên - Số lượng đặt trước';
		$strings['Top20UsersTimeBooked'] = '20 người dùng hàng đầu - Thời gian đã đặt';
		$strings['Top20UsersReservationCount'] = '20 người dùng hàng đầu - Số lượng đặt phòng';
		$strings['ConfigurationUpdated'] = 'Các tập tin cấu hình đã được cập nhật';
		$strings['ConfigurationUiNotEnabled'] = 'Trang này không thể được truy cập vì $conf[\'settings\'][\'pages\'][\'enable.configuration\'] is set to false or missing.';
		$strings['ConfigurationFileNotWritable'] = 'The config file is not writable. Please check the permissions of this file and try again.';
		$strings['ConfigurationUpdateHelp'] = 'Refer to the Configuration section of the <a target=_blank href=%s>Help File</a> for documentation on these settings.';
		$strings['GeneralConfigSettings'] = 'cài đặt';
		$strings['UseSameLayoutForAllDays'] = 'Sử dụng cùng một bố cục cho tất cả các ngày';
		$strings['LayoutVariesByDay'] = 'Bố cục thay đổi theo ngày';
		$strings['ManageReminders'] = 'Nhắc nhở';
		$strings['ReminderUser'] = 'User ID';
		$strings['ReminderMessage'] = 'Thông điệp';
		$strings['ReminderAddress'] = 'Địa chỉ';
		$strings['ReminderSendtime'] = 'Thời gian gửi';
		$strings['ReminderRefNumber'] = 'Số tham chiếu đặt trước';
		$strings['ReminderSendtimeDate'] = 'Ngày nhắc nhở';
		$strings['ReminderSendtimeTime'] = 'Thời gian nhắc nhở (HH: MM)';
		$strings['ReminderSendtimeAMPM'] = 'AM / PM';
		$strings['AddReminder'] = 'Thêm nhắc nhở';
        $strings['DeleteReminderWarning'] = 'Bạn có chắc chắn muốn xóa điều này?';
        $strings['NoReminders'] = 'Bạn không có lời nhắc sắp tới.';
		$strings['Reminders'] = 'Nhắc nhở';
		$strings['SendReminder'] = 'Gửi nhắc nhở';
		$strings['minutes'] = 'Phút';
		$strings['hours'] = 'Giờ';
		$strings['days'] = 'Ngày';
		$strings['ReminderBeforeStart'] = 'Trước khi cuộc họp bắt đầu';
		$strings['ReminderBeforeEnd'] = 'Trước khi cuộc họp kết thúc';
		$strings['Logo'] = 'Logo';
		$strings['CssFile'] = 'CSS File';
		$strings['ThemeUploadSuccess'] = 'Your changes have been saved. Refresh the page for changes to take effect.';
		$strings['MakeDefaultSchedule'] = 'Đặt đây là lịch trình mặc định của tôi';
		$strings['DefaultScheduleSet'] = 'Đây là lịch trình mặc định của bạn';
		$strings['FlipSchedule'] = 'Lật bố trí lịch trình';
		$strings['Next'] = 'Kế tiếp';
		$strings['Success'] = 'Thành công';
		$strings['Participant'] = 'Người tham dự';
		$strings['ResourceFilter'] = 'Tìm phòng họp theo yêu cầu';
		$strings['ResourceGroups'] = 'Nhóm tài nguyên';
		$strings['AddNewGroup'] = 'Tạo một nhóm mới';
		$strings['Quit'] = 'Thoát';
		$strings['AddGroup'] = 'Thêm Nhóm';
		$strings['StandardScheduleDisplay'] = 'Sử dụng hiển thị lịch trình tiêu chuẩn';
		$strings['TallScheduleDisplay'] = 'Sử dụng màn hình hiển thị lịch trình cao';
		$strings['WideScheduleDisplay'] = 'Sử dụng màn hình hiển thị lịch trình rộng';
		$strings['CondensedWeekScheduleDisplay'] = 'Sử dụng hiển thị lịch trình tuần cô đặc';
		$strings['ResourceGroupHelp1'] = 'Kéo và thả các nhóm tài nguyên để sắp xếp lại.';
		$strings['ResourceGroupHelp2'] = 'Nhấp chuột phải vào tên nhóm tài nguyên cho các hành động bổ sung.';
		$strings['ResourceGroupHelp3'] = 'Kéo và thả tài nguyên để thêm chúng vào nhóm.';
		$strings['ResourceGroupWarning'] = 'Nếu sử dụng các nhóm tài nguyên, mỗi tài nguyên phải được gán cho ít nhất một nhóm. Tài nguyên chưa được gán sẽ không thể được bảo lưu.';
		$strings['ResourceType'] = 'Loại';
		$strings['AppliesTo'] = 'Áp dụng đối với';
		$strings['UniquePerInstance'] = 'Mỗi trường hợp duy nhất';
		$strings['AddResourceType'] = 'Thêm loại tài nguyên';
		$strings['NoResourceTypeLabel'] = '(không có loại tài nguyên được đặt)';
		$strings['ClearFilter'] = 'Đặt lại';
		$strings['MinimumCapacity'] = 'Số chổ ngồi ';
		$strings['Color'] = 'Màu';
		$strings['Available'] = 'Có sẵn';
		$strings['Unavailable'] = 'Không có sẵn';
		$strings['Hidden'] = 'Ẩn';
		$strings['ResourceStatus'] = 'Tình trạng tài nguyên';
		$strings['CurrentStatus'] = 'Tình trạng hiện tại';
		$strings['AllReservationResources'] = 'Tất cả tài nguyên đặt phòng';
		$strings['File'] = 'File';
		$strings['BulkResourceUpdate'] = 'Cập nhật tài nguyên hàng loạt';
		$strings['Unchanged'] = 'Không thay đổi';
		$strings['Common'] = 'Chung';
		$strings['AdminOnly'] = 'Chỉ dành cho quản trị viên';
		$strings['AdvancedFilter'] = 'Bộ lọc nâng cao';
		$strings['MinimumQuantity'] = 'Số lượng tối thiểu';
		$strings['MaximumQuantity'] = 'Số lượng tối đa';
		$strings['ChangeLanguage'] = 'Thay đổi ngôn ngữ';
		$strings['AddRule'] = 'Thêm quy tắc';
		$strings['Attribute'] = 'Thuộc tính';
		$strings['RequiredValue'] = 'Giá trị bắt buộc';
		$strings['ReservationCustomRuleAdd'] = 'Sử dụng màu này khi thuộc tính đặt phòng được đặt thành giá trị sau';
		$strings['AddReservationColorRule'] = 'Thêm quy tắc màu đặt trước';
		$strings['LimitAttributeScope'] = 'Thu thập trong các trường hợp cụ thể';
		$strings['CollectFor'] = 'Thu thập cho';
		$strings['SignIn'] = 'Đăng nhập';
		$strings['AllParticipants'] = 'Tất cả người tham gia';
		$strings['RegisterANewAccount'] = 'Đăng ký tài khoản mới';
		$strings['Dates'] = 'Ngày';
		$strings['More'] = 'Hơn';
		$strings['ResourceAvailability'] = 'Nguồn lực sẵn có';
		$strings['UnavailableAllDay'] = 'Không có sẵn cả ngày';
		$strings['AvailableUntil'] = 'Có sẵn cho đến khi';
		$strings['AvailableBeginningAt'] = 'Bắt đầu từ lúc';
        $strings['AvailableAt'] = 'Có sẵn tại';
		$strings['AllResourceTypes'] = 'Tất cả các loại tài nguyên';
		$strings['AllResourceStatuses'] = 'Tất cả các trạng thái tài nguyên';
		$strings['AllowParticipantsToJoin'] = 'Cho phép người tham gia tham gia';
		$strings['Join'] = 'Tham gia';
		$strings['YouAreAParticipant'] = 'Bạn là người tham gia đặt phòng này';
		$strings['YouAreInvited'] = 'Bạn được mời đến đặt phòng này';
		$strings['YouCanJoinThisReservation'] = 'Bạn có thể tham gia đặt phòng này';
		$strings['Import'] = 'Nhập vào';
		$strings['GetTemplate'] = 'Lấy mẫu';
		$strings['UserImportInstructions'] = '<ul><li>Tệp phải ở định dạng CSV.</li><li>Tên người dùng và email là các trường bắt buộc.</li><li>Hiệu lực thuộc tính sẽ không được thực thi.</li><li>Để trống các trường khác sẽ đặt giá trị mặc định và \'password\' as the user\'s password.</li><li>Sử dụng mẫu được cung cấp làm ví dụ.</li></ul>';
		$strings['RowsImported'] = 'Hàng nhập khẩu';
		$strings['RowsSkipped'] = 'Hàng bị bỏ qua';
		$strings['Columns'] = 'Cột';
		$strings['Reserve'] = 'Dự trữ';
		$strings['AllDay'] = 'Cả ngày';
		$strings['Everyday'] = 'Mỗi ngày';
		$strings['IncludingCompletedReservations'] = 'Bao gồm đặt chỗ đã hoàn thành';
		$strings['NotCountingCompletedReservations'] = 'Không bao gồm đặt phòng đã hoàn thành';
		$strings['RetrySkipConflicts'] = 'Bỏ qua các đặt phòng xung đột';
		$strings['Retry'] = 'Thử lại';
		$strings['RemoveExistingPermissions'] = 'Xóa quyền hiện có?';
		$strings['Continue'] = 'Tiếp tục';
		$strings['WeNeedYourEmailAddress'] = 'Chúng tôi cần địa chỉ email của bạn để đặt trước';
		$strings['ResourceColor'] = 'Màu tài nguyên';
		$strings['DateTime'] = 'Ngày giờ';
		$strings['AutoReleaseNotification'] = 'Tự động phát hành nếu không được kiểm tra trong %s phút';
		$strings['RequiresCheckInNotification'] = 'Yêu cầu kiểm tra ra/vào';
		$strings['NoCheckInRequiredNotification'] = 'Không yêu cầu kiểm tra ra/vào';
		$strings['RequiresApproval'] = 'Yêu cầu phê duyệt';
		$strings['CheckingIn'] = 'Đăng ký vào';
		$strings['CheckingOut'] = 'Kiểm tra';
		$strings['CheckIn'] = 'Đăng ký vào';
		$strings['CheckOut'] = 'Kiểm tra';
		$strings['ReleasedIn'] = 'Phát hành vào';
		$strings['CheckedInSuccess'] = 'Bạn đã đăng ký';
		$strings['CheckedOutSuccess'] = 'Bạn đã được kiểm tra';
		$strings['CheckInFailed'] = 'Bạn không thể được kiểm tra';
		$strings['CheckOutFailed'] = 'Bạn không thể được kiểm tra';
		$strings['CheckInTime'] = 'Kiểm tra trong thời gian';
		$strings['CheckOutTime'] = 'Kiểm tra giờ giấc';
		$strings['OriginalEndDate'] = 'Kết thúc ban đầu';
		$strings['SpecificDates'] = 'Hiển thị ngày cụ thể';
		$strings['Users'] = 'Người dùng';
		$strings['Guest'] = 'Khách';
		$strings['ResourceDisplayPrompt'] = 'Tài nguyên để hiển thị';
		$strings['Credits'] = 'Tín dụng';
		$strings['AvailableCredits'] = 'Tín dụng có sẵn';
		$strings['CreditUsagePerSlot'] = 'Đòi hỏi %s tín dụng trên mỗi khe cắm (ngoài giờ cao điểm)';
		$strings['PeakCreditUsagePerSlot'] = 'Đòi hỏi %s tín dụng trên mỗi khe (cao điểm)';
		$strings['CreditsRule'] = 'Bạn không có đủ tín dụng. Tín dụng cần thiết: %s. Tín dụng trong tài khoản: %s';
		$strings['PeakTimes'] = 'Giờ cao điểm';
		$strings['AllYear'] = 'Cả năm';
		$strings['MoreOptions'] = 'Lựa chọn khác';
		$strings['SendAsEmail'] = 'Gửi dưới dạng email';
		$strings['UsersInGroups'] = 'Users In Groups';
		$strings['UsersWithAccessToResources'] = 'Users With Access To Resources';
		$strings['AnnouncementSubject'] = 'A new announcement was posted by %s';
		$strings['AnnouncementEmailNotice'] = 'users will be sent this announcement as an email';
		$strings['Day'] = 'Ngày';
		$strings['NotifyWhenAvailable'] = 'Notify Me When Available';
		$strings['AddingToWaitlist'] = 'Adding you to the wait list';
		$strings['WaitlistRequestAdded'] = 'You will be notified if this time becomes available';
		$strings['PrintQRCode'] = 'In mã QR';
		$strings['FindATime'] = 'Tìm theo thời gian';
		$strings['AnyResource'] = 'Bất kỳ tài nguyên';
		$strings['ThisWeek'] = 'Tuần này';
		$strings['Hours'] = 'Giờ';
		$strings['Minutes'] = 'Phút';
        $strings['ImportICS'] = 'Nhập từ ICS';
        $strings['ImportQuartzy'] = 'Nhập từ Quartzy';
        $strings['OnlyIcs'] = 'Chỉ các tệp *.ics có thể được tải lên.';
        $strings['IcsLocationsAsResources'] = 'Địa điểm sẽ được nhập khẩu dưới dạng tài nguyên.';
        $strings['IcsMissingOrganizer'] = 'Bất kỳ sự kiện nào thiếu một người tổ chức sẽ có chủ sở hữu được đặt thành người dùng hiện tại.';
        $strings['IcsWarning'] = 'Reservation rules will not be enforced - conflicts, duplicates, etc are possible.';
		$strings['BlackoutAroundConflicts'] = 'Mất điện xung quanh các đặt phòng xung đột';
		$strings['DuplicateReservation'] = 'Bản sao';
		$strings['UnavailableNow'] = 'Hiện không có sẵn';
		$strings['ReserveLater'] = 'Dự trữ sau';
		$strings['CollectedFor'] = 'Sưu tầm cho';
		$strings['IncludeDeleted'] = 'Bao gồm đặt phòng đã xóa';
		$strings['Deleted'] = 'Đã xóa';
		$strings['Back'] = 'Trở lại';
		$strings['Forward'] = 'Phía trước';
		$strings['DateRange'] = 'Phạm vi ngày';
		$strings['Copy'] = 'Sao chép';
		$strings['Detect'] = 'Phát hiện';
		$strings['Autofill'] = 'Tự động điền';
		$strings['NameOrEmail'] = 'tên hoặc email';
		$strings['ImportResources'] = 'Nhập vào tài nguyên';
		$strings['ExportResources'] = 'Xuất ra tài nguyên';
		$strings['ResourceImportInstructions'] = '<ul><li>File must be in CSV format with UTF-8 encoding.</li><li>Name is required field. Leaving other fields blank will set default values.</li><li>Status options are \'Available\', \'Unavailable\' and \'Hidden\'.</li><li>Color should be the hex value. ex) #ffffff.</li><li>Auto assign and approval columns can be true or false.</li><li>Attribute validity will not be enforced.</li><li>Comma separate multiple resource groups.</li><li>Use the supplied template as an example.</li></ul>';
		$strings['ReservationImportInstructions'] = '<ul><li>File must be in CSV format with UTF-8 encoding.</li><li>Email, resource names, begin, and end are required fields.</li><li>Begin and end require full date time. Recommended format is YYYY-mm-dd HH:mm (2017-12-31 20:30).</li><li>Rules, conflicts, and valid time slots will not be checked.</li><li>Notifications will not be sent.</li><li>Attribute validity will not be enforced.</li><li>Comma separate multiple resource names.</li><li>Use the supplied template as an example.</li></ul>';
		$strings['AutoReleaseMinutes'] = 'Biên bản tự động';
		$strings['CreditsPeak'] = 'Tín dụng (cao điểm)';
		$strings['CreditsOffPeak'] = 'Tín dụng (ngoài giờ cao điểm)';
		$strings['ResourceMinLengthCsv'] = 'Đặt chiều dài tối thiểu';
		$strings['ResourceMaxLengthCsv'] = 'Đặt chiều dài tối đa';
		$strings['ResourceBufferTimeCsv'] = 'Thời gian đệm';
		$strings['ResourceMinNoticeAddCsv'] = 'Reservation Add Minimum Notice';
		$strings['ResourceMinNoticeUpdateCsv'] = 'Reservation Update Minimum Notice';
		$strings['ResourceMinNoticeDeleteCsv'] = 'Reservation Delete Minimum Notice';
		$strings['ResourceMaxNoticeCsv'] = 'Reservation Maximum End';
		$strings['Export'] = 'Xuất ra';
		$strings['DeleteMultipleUserWarning'] = 'Deleting these users will remove all of their current, future, and historical reservations. No emails will be sent.';
		$strings['DeleteMultipleReservationsWarning'] = 'No emails will be sent.';
		$strings['ErrorMovingReservation'] = 'Error Moving Reservation';
        $strings['SelectUser'] = 'Select User';
        $strings['InviteUsers'] = 'Invite Users';
        $strings['InviteUsersLabel'] = 'Enter the email addresses of the people to invite';
        $strings['ApplyToCurrentUsers'] = 'Apply to current users';
        $strings['ReasonText'] = 'Reason text';
        $strings['NoAvailableMatchingTimes'] = 'There are no available times that match your search';
        $strings['Schedules'] = 'Schedules';
        $strings['NotifyUser'] = 'Notify User';
        $strings['UpdateUsersOnImport'] = 'Update existing user if email already exists';
        $strings['UpdateResourcesOnImport'] = 'Update existing resources if name already exists';
        $strings['Reject'] = 'Reject';
        $strings['CheckingAvailability'] = 'Checking availability';
        $strings['CreditPurchaseNotEnabled'] = 'You have not enabled the ability to purchase credits';
        $strings['CreditsCost'] = 'Each credit costs';
        $strings['Currency'] = 'Currency';
        $strings['PayPalClientId'] = 'Client ID';
        $strings['PayPalSecret'] = 'Secret';
        $strings['PayPalEnvironment'] = 'Environment';
        $strings['Sandbox'] = 'Sandbox';
        $strings['Live'] = 'Trực tiếp';
        $strings['StripePublishableKey'] = 'Publishable key';
        $strings['StripeSecretKey'] = 'Secret key';
        $strings['CreditsUpdated'] = 'Credit cost has been updated';
        $strings['GatewaysUpdated'] = 'Payment gateways have been updated';
        $strings['PurchaseSummary'] = 'Purchase Summary';
        $strings['EachCreditCosts'] = 'Each credit costs';
        $strings['Checkout'] = 'Kiểm tra';
        $strings['Quantity'] = 'Số lượng';
        $strings['CreditPurchase'] = 'Mua tín dụng';
        $strings['EmptyCart'] = 'Giỏ của bạn trống trơn.';
        $strings['BuyCredits'] = 'Mua thẻ tín dụng';
        $strings['CreditsPurchased'] = 'tín dụng đã mua.';
        $strings['ViewYourCredits'] = 'Xem các khoản tín dụng của bạn';
        $strings['TryAgain'] = 'Thử lại';
        $strings['PurchaseFailed'] = 'Chúng tôi đã gặp sự cố khi xử lý thanh toán của bạn.';
        $strings['NoteCreditsPurchased'] = 'Credits purchased';
        $strings['CreditsUpdatedLog'] = 'Credits updated by %s';
        $strings['ReservationCreatedLog'] = 'Đặt phòng được tạo. Số tham chiếu %s';
        $strings['ReservationUpdatedLog'] = 'Đặt phòng cập nhật. Số tham chiếu %s';
        $strings['ReservationDeletedLog'] = 'Đặt phòng đã xóa. Số tham chiếu %s';
        $strings['BuyMoreCredits'] = 'Buy More Credits';
        $strings['Transactions'] = 'Transactions';
        $strings['Cost'] = 'Cost';
        $strings['PaymentGateways'] = 'Payment Gateways';
        $strings['CreditHistory'] = 'Credit History';
        $strings['TransactionHistory'] = 'Transaction History';
        $strings['Date'] = 'Date';
        $strings['Note'] = 'Note';
        $strings['CreditsBefore'] = 'Credits Before';
        $strings['CreditsAfter'] = 'Credits After';
        $strings['TransactionFee'] = 'Transaction Fee';
        $strings['InvoiceNumber'] = 'Invoice Number';
        $strings['TransactionId'] = 'Transaction ID';
        $strings['Gateway'] = 'Gateway';
        $strings['GatewayTransactionDate'] = 'Gateway Transaction Date';
        $strings['Refund'] = 'Refund';
        $strings['IssueRefund'] = 'Issue Refund';
        $strings['RefundIssued'] = 'Refund Issued Successfully';
        $strings['RefundAmount'] = 'Refund Amount';
        $strings['AmountRefunded'] = 'Refunded';
        $strings['FullyRefunded'] = 'Fully Refunded';
        $strings['YourCredits'] = 'Your Credits';
        $strings['PayWithCard'] = 'Pay with Card';
        $strings['or'] = 'or';
        $strings['CreditsRequired'] = 'Credits Required';
        $strings['AddToGoogleCalendar'] = 'Add to Google';
        $strings['Image'] = 'Image';
        $strings['ChooseOrDropFile'] = 'Choose a file or drag it here';
        $strings['SlackBookResource'] = 'Book %s now';
        $strings['SlackBookNow'] = 'Book Now';
        $strings['SlackNotFound'] = 'We could not find a resource with that name. Book Now to start a new reservation.';
        $strings['AutomaticallyAddToGroup'] = 'Automatically add new users to this group';
        $strings['GroupAutomaticallyAdd'] = 'Auto Add';
        $strings['TermsOfService'] = 'Terms of Service';
        $strings['EnterTermsManually'] = 'Enter Terms Manually';
        $strings['LinkToTerms'] = 'Link to Terms';
        $strings['UploadTerms'] = 'Upload Terms';
        $strings['RequireTermsOfServiceAcknowledgement'] = 'Require Terms of Service Acknowledgement';
        $strings['UponReservation'] = 'Upon Reservation';
        $strings['UponRegistration'] = 'Upon Registration';
        $strings['ViewTerms'] = 'Xem Điều khoản dịch vụ';
        $strings['IAccept'] = 'Tôi chấp nhận';
        $strings['TheTermsOfService'] = 'the Terms of Service';
        $strings['DisplayPage'] = 'Display Page';
        $strings['AvailableAllYear'] = 'All Year';
        $strings['Availability'] = 'Availability';
        $strings['AvailableBetween'] = 'Available Between';
        $strings['ConcurrentYes'] = 'Resources can be booked by more than one person at a time';
        $strings['ConcurrentNo'] = 'Resources cannot be booked by more than one person at a time';
        $strings['ScheduleAvailabilityEarly'] = ' This schedule is not yet available. It is available';
        $strings['ScheduleAvailabilityLate'] = 'This schedule is no longer available. It was available';
        $strings['ResourceImages'] = 'Resource Images';
        $strings['FullAccess'] = 'Full Access';
        $strings['ViewOnly'] = 'View Only';
        $strings['Purge'] = 'Purge';
        $strings['UsersWillBeDeleted'] = 'users will be deleted';
        $strings['BlackoutsWillBeDeleted'] = 'blackout times will be deleted';
        $strings['ReservationsWillBePurged'] = 'reservations will be purged';
        $strings['ReservationsWillBeDeleted'] = 'reservations will be deleted';
        $strings['PermanentlyDeleteUsers'] = 'Permanently delete users who have not logged in since';
        $strings['DeleteBlackoutsBefore'] = 'Delete blackout times before';
        $strings['DeletedReservations'] = 'Deleted Reservations';
        $strings['DeleteReservationsBefore'] = 'Delete reservations before';
        $strings['SwitchToACustomLayout'] = 'Switch to a custom layout';
        $strings['SwitchToAStandardLayout'] = 'Switch to a standard layout';
        $strings['ThisScheduleUsesACustomLayout'] = 'This schedule uses a custom layout';
        $strings['ThisScheduleUsesAStandardLayout'] = 'This schedule uses a standard layout';
        $strings['SwitchLayoutWarning'] = 'Are you sure that you want to change the layout type? This will remove all existing slots.';
        $strings['DeleteThisTimeSlot'] = 'Xóa khoảng thời gian này?';
        $strings['Refresh'] = 'Làm mới';
        $strings['ViewReservation'] = 'Xem đặt chỗ';
        $strings['PublicId'] = 'Public Id';
        $strings['Public'] = 'Public';
        $strings['AtomFeedTitle'] = '%s Đặt phòng';
        $strings['DefaultStyle'] = 'Kiểu mặc định';
        $strings['Standard'] = 'Tiêu chuẩn';
        $strings['Wide'] = 'Rộng';
        $strings['Tall'] = 'Cao';
        $strings['EmailTemplate'] = 'Mẫu email';
        $strings['SelectEmailTemplate'] = 'Chọn mẫu email';
        $strings['ReloadOriginalContents'] = 'Tải lại nội dung gốc';
        $strings['UpdateEmailTemplateSuccess'] = 'Mẫu email cập nhật';
        $strings['UpdateEmailTemplateFailure'] = 'Không thể cập nhật mẫu email. Kiểm tra để đảm bảo thư mục có thể ghi.';
        $strings['BulkResourceDelete'] = 'Xóa tài nguyên hàng loạt';
        $strings['NewVersion'] = 'Phiên bản mới!';
        $strings['WhatsNew'] = 'Có gì mới?';
        $strings['OnlyViewedCalendar'] = 'Lịch trình này chỉ có thể được xem từ chế độ xem lịch';
        $strings['Grid'] = 'Lưới';
        $strings['List'] = 'Danh sách';
        $strings['NoReservationsFound'] = 'Không tìm thấy đặt phòng';
        $strings['EmailReservation'] = 'Đặt phòng qua email';
        $strings['AdHocMeeting'] = 'Cuộc họp đặc biệt';
        $strings['NextReservation'] = 'Đặt phòng tiếp theo';
        $strings['MissedCheckin'] = 'Đăng ký bị mất';
        $strings['MissedCheckout'] = 'Thanh toán bị mất';
        $strings['Utilization'] = 'Sử dụng';
        $strings['SpecificTime'] = 'Thời điểm cụ thể';
        $strings['ReservationSeriesEndingPreference'] = 'Khi loạt đặt phòng định kỳ của tôi kết thúc';
        $strings['NotAttending'] = 'Không tham dự';
        $strings['ViewAvailability'] = 'Xem sẵn có';
        $strings['ReservationDetails'] = 'Chi tiết Đặt phòng';
        $strings['StartTime'] = 'Thời gian bắt đầu';
        $strings['EndTime'] = 'Thời gian kết thúc';
        // End Strings

		// Install
		$strings['InstallApplication'] = 'Install Booked Scheduler';
		$strings['IncorrectInstallPassword'] = 'Sorry, that password was incorrect.';
		$strings['SetInstallPassword'] = 'You must set an install password before the installation can be run.';
		$strings['InstallPasswordInstructions'] = 'In %s please set %s to a password which is random and difficult to guess, then return to this page.<br/>You can use %s';
		$strings['NoUpgradeNeeded'] = 'Booked is up to date. There is no upgrade needed.';
		$strings['ProvideInstallPassword'] = 'Please provide your installation password.';
		$strings['InstallPasswordLocation'] = 'This can be found at %s in %s.';
		$strings['VerifyInstallSettings'] = 'Verify the following default settings before continuing. Or you can change them in %s.';
		$strings['DatabaseName'] = 'Database Name';
		$strings['DatabaseUser'] = 'Database User';
		$strings['DatabaseHost'] = 'Database Host';
		$strings['DatabaseCredentials'] = 'You must provide credentials of a MySQL user who has privileges to create databases. If you do not know, contact your database admin. In many cases, root will work.';
		$strings['MySQLUser'] = 'MySQL User';
		$strings['InstallOptionsWarning'] = 'The following options will probably not work in a hosted environment. If you are installing in a hosted environment, use the MySQL wizard tools to complete these steps.';
		$strings['CreateDatabase'] = 'Create the database';
		$strings['CreateDatabaseUser'] = 'Create the database user';
		$strings['PopulateExampleData'] = 'Import sample data. Creates admin account: admin/password and user account: user/password';
		$strings['DataWipeWarning'] = 'Warning: This will delete any existing data';
		$strings['RunInstallation'] = 'Run Installation';
		$strings['UpgradeNotice'] = 'You are upgrading from version <b>%s</b> to version <b>%s</b>';
		$strings['RunUpgrade'] = 'Run Upgrade';
		$strings['Executing'] = 'Executing';
		$strings['StatementFailed'] = 'Failed. Details:';
		$strings['SQLStatement'] = 'SQL Statement:';
		$strings['ErrorCode'] = 'Error Code:';
		$strings['ErrorText'] = 'Error Text:';
		$strings['InstallationSuccess'] = 'Installation completed successfully!';
		$strings['RegisterAdminUser'] = 'Register your admin user. This is required if you did not import the sample data. Ensure that $conf[\'settings\'][\'allow.self.registration\'] = \'true\' in your %s file.';
		$strings['LoginWithSampleAccounts'] = 'If you imported the sample data, you can log in with admin/password for admin user or user/password for basic user.';
		$strings['InstalledVersion'] = 'You are now running version %s of Booked Scheduler';
		$strings['InstallUpgradeConfig'] = 'It is recommended to upgrade your config file';
		$strings['InstallationFailure'] = 'There were problems with the installation.  Please correct them and retry the installation.';
		$strings['ConfigureApplication'] = 'Cấu hình bộ lập lịch đã đặt';
		$strings['ConfigUpdateSuccess'] = 'Your config file is now up to date!';
		$strings['ConfigUpdateFailure'] = 'We could not automatically update your config file. Please overwrite the contents of config.php with the following:';
		$strings['ScriptUrlWarning'] = 'Your <em>script.url</em> setting may not be correct. It is currently <strong>%s</strong>, we think it should be <strong>%s</strong>';
		// End Install

		// Errors
		$strings['LoginError'] = 'Hệ thống không tìm thấy tên đăng nhập hoặc mật khẩu mà bạn vừa gõ';
		$strings['ReservationFailed'] = 'Your reservation could not be made';
		$strings['MinNoticeError'] = 'This reservation requires advance notice. The earliest date and time that can be reserved is %s.';
		$strings['MinNoticeErrorUpdate'] = 'Changing this reservation requires advance notice. Reservations before %s are not allowed to be changed.';
		$strings['MinNoticeErrorDelete'] = 'Deleting this reservation requires advance notice. Reservations before %s are not allowed to be deleted.';
		$strings['MaxNoticeError'] = 'This reservation cannot be made this far in the future. The latest date and time that can be reserved is %s.';
		$strings['MinDurationError'] = 'This reservation must last at least %s.';
		$strings['MaxDurationError'] = 'This reservation cannot last longer than %s.';
		$strings['ConflictingAccessoryDates'] = 'There are not enough of the following accessories:';
		$strings['NoResourcePermission'] = 'You do not have permission to access one or more of the requested resources.';
		$strings['ConflictingReservationDates'] = 'There are conflicting reservations on the following dates:';
		$strings['StartDateBeforeEndDateRule'] = 'The start date and time must be before the end date and time.';
		$strings['StartIsInPast'] = 'The start date and time cannot be in the past.';
		$strings['EmailDisabled'] = 'The administrator has disabled email notifications.';
		$strings['ValidLayoutRequired'] = 'Slots must be provided for all 24 hours of the day beginning and ending at 00:00.';
		$strings['CustomAttributeErrors'] = 'There are problems with the additional attributes you provided:';
		$strings['CustomAttributeRequired'] = '%s is a required field.';
		$strings['CustomAttributeInvalid'] = 'The value provided for %s is invalid.';
		$strings['AttachmentLoadingError'] = 'Sorry, there was a problem loading the requested file.';
		$strings['InvalidAttachmentExtension'] = 'You can only upload files of type: %s';
		$strings['InvalidStartSlot'] = 'The start date and time requested is not valid.';
		$strings['InvalidEndSlot'] = 'The end date and time requested is not valid.';
		$strings['MaxParticipantsError'] = '%s can only support %s participants.';
		$strings['ReservationCriticalError'] = 'There was a critical error saving your reservation. If this continues, contact your system administrator.';
		$strings['InvalidStartReminderTime'] = 'The start reminder time is not valid.';
		$strings['InvalidEndReminderTime'] = 'The end reminder time is not valid.';
		$strings['QuotaExceeded'] = 'Vượt quá giới hạn.';
		$strings['MultiDayRule'] = '%s does not allow reservations across days.';
		$strings['InvalidReservationData'] = 'There were problems with your reservation request.';
		$strings['PasswordError'] = 'Mật khẩu phải chứa ít nhất %s thư và ít nhất %s số.';
		$strings['PasswordErrorRequirements'] = 'Mật khẩu phải chứa kết hợp ít nhất %s chữ in hoa và in thường và %s số.';
		$strings['NoReservationAccess'] = 'Bạn không được phép thay đổi đặt phòng này.';
		$strings['PasswordControlledExternallyError'] = 'Mật khẩu của bạn được kiểm soát bởi một hệ thống bên ngoài và không thể được cập nhật tại đây.';
		$strings['AccessoryResourceRequiredErrorMessage'] = 'Phụ kiện %s chỉ có thể được đặt với tài nguyên %s';
		$strings['AccessoryMinQuantityErrorMessage'] = 'You must book at least %s of accessory %s';
		$strings['AccessoryMaxQuantityErrorMessage'] = 'You cannot book more than %s of accessory %s';
		$strings['AccessoryResourceAssociationErrorMessage'] = 'Phụ kiện \'%s\' không thể được đặt với các tài nguyên được yêu cầu';
		$strings['NoResources'] = 'Bạn chưa thêm bất kỳ tài nguyên nào.';
		$strings['ParticipationNotAllowed'] = 'Bạn không được phép tham gia đặt phòng này.';
		$strings['ReservationCannotBeCheckedInTo'] = 'Đặt phòng này không thể được kiểm tra.';
		$strings['ReservationCannotBeCheckedOutFrom'] = 'Đặt phòng này không thể được kiểm tra từ.';
		$strings['InvalidEmailDomain'] = 'Địa chỉ email đó không phải từ một miền được phép';
		$strings['TermsOfServiceError'] = 'Bạn phải chấp nhận Điều khoản dịch vụ';
		$strings['UserNotFound'] = 'Không thể tìm thấy người dùng đó';
		$strings['ScheduleAvailabilityError'] = 'Lịch trình này có sẵn giữa %s và %s';
		$strings['ReservationNotFoundError'] = 'Không tìm thấy đặt phòng';
		$strings['ReservationNotAvailable'] = 'Đặt phòng không có sẵn';
		$strings['TitleRequiredRule'] = 'Yêu cầu đặt trước';
		$strings['DescriptionRequiredRule'] = 'Mô tả đặt phòng là cần thiết';
		$strings['WhatCanThisGroupManage'] = 'Nhóm này có thể quản lý cái gì?';
		$strings['ReservationParticipationActivityPreference'] = 'Khi ai đó tham gia hoặc rời khỏi đặt phòng của tôi';
		$strings['RegisteredAccountRequired'] = 'Chỉ người dùng đã đăng ký mới có thể đặt phòng';
		// End Errors

		// Page Titles
		$strings['CreateReservation'] = 'Tạo lịch họp';
		$strings['EditReservation'] = 'Cập nhật lịch họp';
		$strings['LogIn'] = 'Đăng nhập';
		$strings['ManageReservations'] = 'Quản lý đặt chỗ';
		$strings['AwaitingActivation'] = 'Đang chờ kích hoạt';
		$strings['PendingApproval'] = 'Chờ phê duyệt';
		$strings['ManageSchedules'] = 'Quản lý lịch';
		$strings['ManageResources'] = 'Quản lý danh sách phòng';
		$strings['ManageAccessories'] = 'Quản lý trang thiết bị';
		$strings['ManageUsers'] = 'Quản lý người dùng';
		$strings['ManageGroups'] = 'Quản lý nhóm';
		$strings['ManageQuotas'] = 'Hạn mức';
		$strings['ManageBlackouts'] = 'Blackouts Time';
		$strings['MyDashboard'] = 'Bảng điều khiển của tôi';
		$strings['ServerSettings'] = 'Cài đặt máy chủ';
		$strings['Dashboard'] = 'Bảng điều khiển';
		$strings['Help'] = 'Hướng dẫn';
		$strings['Administration'] = 'Quản trị';
		$strings['About'] = 'Liên hệ';
		$strings['Bookings'] = 'Đặt chỗ';
		$strings['Schedule'] = 'Lịch trình';
		$strings['Account'] = 'Tài khoản';
		$strings['EditProfile'] = 'Sửa thông tin cá nhân của tôi';
		$strings['FindAnOpening'] = 'Tìm và mở';
		$strings['OpenInvitations'] = 'Lời mời mở';
		$strings['ResourceCalendar'] = 'Lịch tài nguyên';
		$strings['Reservation'] = 'Lên lịch họp';
		$strings['Install'] = 'Installation';
		$strings['ChangePassword'] = 'Đổi mật khẩu';
		$strings['MyAccount'] = 'Tài khoản của tôi';
		$strings['Profile'] = 'Hồ sơ';
		$strings['ApplicationManagement'] = 'Quản lý ứng dụng';
		$strings['ForgotPassword'] = 'Quên mật khẩu';
		$strings['NotificationPreferences'] = 'Tùy chọn thông báo';
		$strings['ManageAnnouncements'] = 'Thông báo !!!';
		$strings['Responsibilities'] = 'Trách nhiệm';
		$strings['GroupReservations'] = 'Đặt phòng theo nhóm';
		$strings['ResourceReservations'] = 'Resource Reservations';
		$strings['Customization'] = 'Tùy biến';
		$strings['Attributes'] = 'Attributes';
		$strings['AccountActivation'] = 'Kích hoạt tài khoản';
		$strings['ScheduleReservations'] = 'Lịch trình đặt phòng';
		$strings['Reports'] = 'Báo cáo';
		$strings['GenerateReport'] = 'Tạo báo cáo mới';
		$strings['MySavedReports'] = 'Lưu báo cáo';
		$strings['CommonReports'] = 'Báo cáo thường gặp';
		$strings['ViewDay'] = 'Xem Ngày';
		$strings['Group'] = 'Nhóm';
		$strings['ManageConfiguration'] = 'Cấu hình ứng dụng';
		$strings['LookAndFeel'] = 'Xem và cảm nhận';
		$strings['ManageResourceGroups'] = 'Nhóm tài nguyên';
		$strings['ManageResourceTypes'] = 'Các loại tài nguyên';
		$strings['ManageResourceStatus'] = 'Tình trạng tài nguyên';
		$strings['ReservationColors'] = 'Màu sắc đặt phòng';
		$strings['SearchReservations'] = 'Tìm kiếm đặt phòng';
		$strings['ManagePayments'] = 'Thanh toán';
		$strings['ViewCalendar'] = 'Xem lịch';
		$strings['DataCleanup'] = 'Dọn dẹp dữ liệu';
		$strings['ManageEmailTemplates'] = 'Quản lý mẫu email';
		// End Page Titles

		// Day representations
		$strings['DaySundaySingle'] = 'S';
		$strings['DayMondaySingle'] = 'M';
		$strings['DayTuesdaySingle'] = 'T';
		$strings['DayWednesdaySingle'] = 'W';
		$strings['DayThursdaySingle'] = 'T';
		$strings['DayFridaySingle'] = 'F';
		$strings['DaySaturdaySingle'] = 'S';

		$strings['DaySundayAbbr'] = 'Chủ Nhật';
		$strings['DayMondayAbbr'] = 'Thứ 2';
		$strings['DayTuesdayAbbr'] = 'Thứ 3';
		$strings['DayWednesdayAbbr'] = 'Thứ 4';
		$strings['DayThursdayAbbr'] = 'Thứ 5';
		$strings['DayFridayAbbr'] = 'Thứ 6';
		$strings['DaySaturdayAbbr'] = 'Thứ 7';
		// End Day representations

		// Email Subjects
		$strings['ReservationApprovedSubject'] = 'Lịch họp của bạn đã được phê duyệt';
		$strings['ReservationCreatedSubject'] = 'Lịch họp của bạn đã được tạo';
		$strings['ReservationUpdatedSubject'] = 'Lịch họp của bạn đã được cập nhật';
		$strings['ReservationDeletedSubject'] = 'Lịch họp của bạn đã bị xóa';
		$strings['ReservationCreatedAdminSubject'] = 'Thông báo: Một đặt phòng đã được tạo';
		$strings['ReservationUpdatedAdminSubject'] = 'Thông báo: Một đặt phòng đã được cập nhật';
		$strings['ReservationDeleteAdminSubject'] = 'Thông báo: Một đặt phòng đã bị xóa';
		$strings['ReservationApprovalAdminSubject'] = 'Thông báo: Yêu cầu đặt phòng họp của bạn phải được phê duyệ';
		$strings['ParticipantAddedSubject'] = 'Thông báo tham gia đặt phòng';
		$strings['ParticipantDeletedSubject'] = 'Lịch họp đã hủy';
		$strings['InviteeAddedSubject'] = 'Mời người tham dự họp';
		$strings['ResetPasswordRequest'] = 'Yêu cầu đổi mật khẩu';
		$strings['ActivateYourAccount'] = 'Vui lòng kích hoạt tài khoản của bạn';
		$strings['ReportSubject'] = 'Báo cáo yêu cầu của bạn (%s)';
		$strings['ReservationStartingSoonSubject'] = 'Lịch họp %s sẽ sớm được bắt đầu ';
		$strings['ReservationEndingSoonSubject'] = 'Đặt phòng cho %s sẽ kết thúc sớm';
		$strings['UserAdded'] = 'Người sử dụng mới đã được tạo';
		$strings['UserDeleted'] = 'Tài khoản người dùng cho %s đã bị xóa bởi %s';
		$strings['GuestAccountCreatedSubject'] = 'Thông tin tài khoản của bạn';
		$strings['AccountCreatedSubject'] = 'Your %s account details';
		$strings['InviteUserSubject'] = '%s đã mời bạn tham gia %s';

		$strings['ReservationApprovedSubjectWithResource'] = 'Đặt phòng đã được phê duyệt cho %s';
		$strings['ReservationCreatedSubjectWithResource'] = 'Đặt phòng tạo cho %s';
		$strings['ReservationUpdatedSubjectWithResource'] = 'Đặt phòng Cập nhật cho %s';
		$strings['ReservationDeletedSubjectWithResource'] = 'Đặt phòng đã xóa %s';
		$strings['ReservationCreatedAdminSubjectWithResource'] = 'Thông báo: Đặt phòng được tạo cho %s';
		$strings['ReservationUpdatedAdminSubjectWithResource'] = 'Thông báo: Đặt phòng Cập nhật cho %s';
		$strings['ReservationDeleteAdminSubjectWithResource'] = 'Thông báo: Đã xóa đặt phòng cho %s';
		$strings['ReservationApprovalAdminSubjectWithResource'] = 'Thông báo: Đặt phòng cho %s Yêu cầu sự chấp thuận của bạn';
		$strings['ParticipantAddedSubjectWithResource'] = '%s đã thêm Bạn vào một Đặt phòng cho %s';
		$strings['ParticipantDeletedSubjectWithResource'] = '%s Đã xóa một Đặt phòng cho %s';
		$strings['InviteeAddedSubjectWithResource'] = '%s Đã mời bạn đặt phòng cho %s';
		$strings['MissedCheckinEmailSubject'] = 'Đăng ký bị mất cho %s';
		$strings['ReservationShareSubject'] = '%s Đã chia sẻ Đặt chỗ cho %s';
		$strings['ReservationSeriesEndingSubject'] = 'Dòng đặt trước cho %s đang kết thúc %s';
		$strings['ReservationParticipantAccept'] = '%s Đã chấp nhận lời mời đặt phòng của bạn cho %s trên %s';
		$strings['ReservationParticipantDecline'] = '%s Đã từ chối lời mời đặt phòng của bạn cho %s trên %s';
		$strings['ReservationParticipantJoin'] = '%s Đã tham gia đặt chỗ của bạn cho %s trên %s';
		// End Email Subjects

		$this->Strings = $strings;

		return $this->Strings;
	}

	/**
	 * @return array
	 */
// 	protected function _LoadDays()
// 	{
// 		$days = array();

// 		/***
// 		 * DAY NAMES
// 		 * All of these arrays MUST start with Sunday as the first element
// 		 * and go through the seven day week, ending on Saturday
// 		 ***/
// 		// The full day name
// 		$days['full'] = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
// 		// The three letter abbreviation
// 		$days['abbr'] = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
// 		// The two letter abbreviation
// 		$days['two'] = array('Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa');
// 		// The one letter abbreviation
// 		$days['letter'] = array('S', 'M', 'T', 'W', 'T', 'F', 'S');

// 		$this->Days = $days;

// 		return $this->Days;
// 	}

// 	/**
// 	 * @return array
// 	 */
// 	protected function _LoadMonths()
// 	{
// 		$months = array();

// 		**
// 		 * MONTH NAMES
// 		 * All of these arrays MUST start with January as the first element
// 		 * and go through the twelve months of the year, ending on December
// 		 **
// 		// The full month name
// 		$months['full'] = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
// 		// The three letter month name
// 		$months['abbr'] = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

// 		$this->Months = $months;

// 		return $this->Months;
// 	}

// 	/**
// 	 * @return array
// 	 */
// 	protected function _LoadLetters()
// 	{
// 		$this->Letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

// 		return $this->Letters;
// 	}

// 	protected function _GetHtmlLangCode()
// 	{
// 		return 'en';
// 	}
// }
	protected function _LoadDays()
	{
		$days = array();

		/***
		 * DAY NAMES
		 * All of these arrays MUST start with Sunday as the first element
		 * and go through the seven day week, ending on Saturday
		 ***/
		// The full day name
		$days['full'] = array('Chủ Nhật', 'Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7');
		// The three letter abbreviation
		$days['abbr'] = array('CN', 'Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7');
		// The two letter abbreviation
		$days['two'] = array('Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa');
		// The one letter abbreviation
		$days['letter'] = array('S', 'M', 'T', 'W', 'T', 'F', 'S');

		$this->Days = $days;

		return $this->Days;
	}

	/**
	 * @return array
	 */
	protected function _LoadMonths()
	{
		$months = array();

		/***
		 * MONTH NAMES
		 * All of these arrays MUST start with January as the first element
		 * and go through the twelve months of the year, ending on December
		 ***/
		// The full month name
		// $months['full'] = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		// // The three letter month name
		// $months['abbr'] = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

		$months['full'] = array('Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12');
		// The three letter month name
		$months['abbr'] = array('Tháng 1', 'Tháng2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12');

		$this->Months = $months;

		return $this->Months;
	}

	/**
	 * @return array
	 */
	protected function _LoadLetters()
	{
		$this->Letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

		return $this->Letters;
	}

	protected function _GetHtmlLangCode()
	{
		return 'en';
	}
}